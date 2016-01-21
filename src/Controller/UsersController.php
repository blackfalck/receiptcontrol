<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;
use Cake\Utility\Text;
use Cake\Validation\Validation;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['login', 'forgot','register']);
    }
    
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $id = $this->Auth->user('id');
        $user = $this->Users->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (empty($this->request->data['password']) || $this->request->data['password'] == "") {
               // $this->request->data['password'] =
                unset($this->request->data['password']);
            }
            
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        
        $this->set('title', 'my_account');
        $this->set('subtitle', 'my_account_sub');
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    public function login()
    {
        if ($this->request->is('post')) {
            if (Validation::email($this->request->data['email'])) {
                    $this->Auth->config('authenticate', [
                        'Form' => [
                            'fields' => ['username' => 'email']
                        ]
                    ]);
                    $this->Auth->constructAuthenticate();
            }

                $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
                
                $this->Flash->error(__('Invalid email or password, try again'));
        }
        
        $user = $this->Users->newEntity();
        
        $this->set('title', 'login');
        $this->set('subtitle', 'login_description');
        $this->set('page', 'login');
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect($this->referer());
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
                return $this->redirect($this->referer());
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    
    /**
     * Forgot method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function forgot()
    {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->find('all')
                    ->where(['email' => $this->request->data['email']])
                    ->first();
            
            if (!isset($user)) {
                $this->Flash->error(__('I am sorry something went wrong'));
                return $this->redirect(['action' => 'forgot']);
            }
            
            $newpassword['password'] = substr(sha1(Text::uuid()), 0, 12);
            
            $user = $this->Users->patchEntity($user, $newpassword);
            
            if ($this->Users->save($user)) {
                 //send pw with email
                if (mail($user['email'], 'Your new password', 'Hi, you can login with the new password:  '.$newpassword['password'])) {
                    $this->Flash->success(__('New Password requested'));
                    return $this->redirect(['action' => 'login']);
                }
            } else {
                $this->Flash->error(__('I am sorry something went wrong'));
                return $this->redirect(['action' => 'login']);
            }
        }
    }
}
