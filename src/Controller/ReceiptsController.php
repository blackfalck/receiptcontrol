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
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receipts = $this->Receipts->find('all');
            
            if (isset($this->request->data['query']) && !empty($this->request->data['query'])) {
                $receipts->where(['Receipts.title like' => '%'.$this->request->data['query'].'%']);
            }
            
            if ($this->request->data['year'] != 'year' && isset($this->request->data['year']) && !empty($this->request->data['year'])) {
                $receipts->where(['YEAR(Receipts.purchased) =' => $this->request->data['year']]);
            }
            $receipts->where(['user_id' => $this->Auth->user('id')]);
        } else {
            
            
            $receipts = $this->Receipts->find('all')
                    ->where([
                        'user_id' => $this->Auth->user('id')
                            ]);
        }
        
        $this->set('title', 'receipts');
        $this->set('subtitle', 'receipts_sub');
        $this->set('receipts', $receipts);
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
                    'user_id' => [$this->Auth->user('id')]]);
                
                
               
       
        $this->set('title', $receipt->title);
        $this->set('subtitle', $receipt->description);
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
        $receipt = $this->Receipts->newEntity();
        if ($this->request->is('post')) {
            $this->saveWithImage($this->request->data, $receipt);
        }
     
        $this->set('title', 'add_receipt');
        $this->set('subtitle', 'add_receipts_sub');
        
        $this->set(compact('receipt'));
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
        $receipt = $this->Receipts->get($id, [
                    'user_id' => [$this->Auth->user('id')]]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->saveWithImage($this->request->data, $receipt);
        }
        
        $this->set('title', 'edit_reciept');
        $this->set('subtitle', 'edit_reciept_sub');
        $this->set(compact('receipt'));
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
        $receipt = $this->Receipts->get($id, [
                    'user_id' => [$this->Auth->user('id')]]);
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
       
        if (file_exists($todelete) == true) {
            unlink($todelete);
        }
    }
    
    //save image function
    private function saveWithImage($data, $receipt = null)
    {
        $receipt = $this->Receipts->patchEntity($receipt, $this->request->data);
            
        if (isset($this->request->data['filename']['name']) && !empty($this->request->data['filename']['name'])) {
            //if deleted is 1: empty filename + file_name original and delete image
            if (isset($this->request->data['deleted']) && $this->request->data['deleted'] == "1") {
                $this->removeimage($receipt->filename);
                $receipt->filename = '';
                $receipt->filename_original = '';
            }
            
            $original_filename = $this->request->data['filename']['name'];
            $uuid_filename = $this->Upload->send($this->request->data['filename']);

            if (!empty($receipt->getOriginal('filename'))) {
                $original_name = $receipt->getOriginal('filename');
            }

            $receipt->filename = $uuid_filename;
            $receipt->filename_original = $original_filename;
        } else {
            $receipt->filename = $receipt->getOriginal('filename');
        }
        
        $receipt->user_id = $this->Auth->user('id');
        
        if ($this->Receipts->save($receipt)) {
            if (!empty($original_name)) {
                $this->removeimage($original_name);
            }

            $this->Flash->success(__('The receipt has been saved.'));
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error(__('The receipt could not be saved. Please, try again.'));
        }
    }
}
