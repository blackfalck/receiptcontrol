<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;
use Cake\Filesystem\File;
/**
 * Receipts Controller
 *
 * @property \App\Model\Table\ReceiptsTable $Receipts
 */
class ReceiptsController extends AppController
{
    public function initialize()
    {
        //I18n::locale('nl_NL');
        parent::initialize();
        $this->loadComponent('Upload');
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {       
        $this->paginate = [
            'contain' => ['Users']
        ];
        
        if(!empty($this->request->params['pass']))
        {            
            // The 'pass' key is provided by CakePHP and contains all
            // the passed URL path segments in the request.
            $tags = $this->request->params['pass'];

            // Use the BookmarksTable to find tagged bookmarks.
            $this->Receipts = $this->Receipts->find('all', [
                'conditions' => ['Receipts.title like' => $tags[0]]
            ]);

            // Pass variables into the view template context.
            $this->set(['tags' => $tags]);
        }        
   
        
        $this->set('receipts', $this->Receipts->find('all')); 
        $this->set('_serialize', ['receipts']);
    }

    /**
     * View method
     *
     * @param string|null $id Receipt id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receipt = $this->Receipts->get($id, [
            'contain' => ['Users']
        ]);
        $this->set('receipt', $receipt);
        $this->set('_serialize', ['receipt']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        //add picture
        
        $receipt = $this->Receipts->newEntity();
        if ($this->request->is('post')) {
            $receipt = $this->Receipts->patchEntity($receipt, $this->request->data);
            if ($this->Receipts->save($receipt)) {
                $this->Flash->success(__('The receipt has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receipt could not be saved. Please, try again.'));
            }
        }
        $users = $this->Receipts->Users->find('list', ['limit' => 200]);
        $this->set(compact('receipt', 'users'));
        $this->set('_serialize', ['receipt']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Receipt id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {        
        $receipt = $this->Receipts->get($id);
        
        if ($this->request->is(['patch', 'post', 'put'])) 
        {           
            $receipt = $this->Receipts->patchEntity($receipt, $this->request->data);
            
            if(isset($this->request->data['filename']['name']) && !empty($this->request->data['filename']['name']))
            {                
                $original_filename = $this->request->data['filename']['name'];             
                $uuid_filename = $this->Upload->send($this->request->data['filename']);  

                if(!empty($receipt->getOriginal('filename')))
                {                    
                    $original_name = $receipt->getOriginal('filename');                     
                }
                
                $receipt->filename = $uuid_filename;
                $receipt->filename_original = $original_filename;  
            }
            else
            {
                $receipt->filename = $receipt->getOriginal('filename');
            }     
            
            //if deleted is 1: empty filename + file_name original and delete image
            if($this->request->data['deleted'] == "1")
            {
                $this->removeimage($receipt->filename);                
                unset($receipt->filename, $receipt->filename_original);                
            }
           
            if ($this->Receipts->save($receipt)) 
            {                
                if(!empty($original_name))
                {                    
                    $this->removeimage($original_name);                                    
                }
                 
                $this->Flash->success(__('The receipt has been saved.'));  
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The receipt could not be saved. Please, try again.'));
            }
        }        
        
        $this->set(compact('receipt' ));
        $this->set('_serialize', ['receipt']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Receipt id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receipt = $this->Receipts->get($id);
        $filename = $receipt->filename;
        
        if ($this->Receipts->delete($receipt)) {
            $this->removeimage($filename);
            $this->Flash->success(__('The receipt has been deleted.'));
        } else {
            $this->Flash->error(__('The receipt could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    private function removeimage($image)
    {
        $todelete = WWW_ROOT.'img'.DS.'uploads'.$image;
       
        if(file_exists($todelete) == true)
        {
            unlink($todelete);
        }
    }
}
