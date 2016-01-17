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
class LocaleController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['change']);
    }

    /**
     * Index method
     *
     * @return void
     */
    public function change($locale = null)
    {
        if ($locale == null) {
            $locale = 'en_US';
        }
        
        I18n::locale($locale);
        $session = $this->request->session();
        $session->write('locale', $locale);
        
        $this->redirect($this->referer());
    }
}
