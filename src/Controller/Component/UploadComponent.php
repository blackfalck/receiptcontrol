<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;

/**
 * Upload component
 */
class UploadComponent extends Component
{

    public $max_files = 3;


    public function send($file)
    {
       
        if (!empty($file)) {
            $filename = $file['name'];
            $file_tmp_name = $file['tmp_name'];
            $dir = WWW_ROOT.'img'.DS.'uploads';
            
            $allowed = array('png', 'jpg', 'jpeg');
            if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
                throw new InternalErrorException("Error Processing Request.", 1);
                
            } elseif (is_uploaded_file($file_tmp_name)) {
                $uuid_filename = DS.Text::uuid().'-'.$filename;
                move_uploaded_file($file_tmp_name, $dir.$uuid_filename);
                 return $uuid_filename;
                
            }
        }
        
        
    }
}
