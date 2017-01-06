<?php

namespace App\Controller;

use App\Controller\AppController;

class TestController extends AppController {

    public function index() {
        $incident = $this->Test->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['photo_path'] = $this->UploadFiles($this->request->data['file'], 'documents');
            print_r($this->request->data);
            die();
            $this->request->data['person_details_id'] = $id;
            $this->request->data['incident_date'] = date('Y-m-d');
            $incident = $this->Test->patchEntity($incident, $this->request->data);
        }
    }

    public function UploadFiles($filedetails, $destination) {
        if (!empty($filedetails['name'])) {
            $ext = substr(strtolower(strrchr($filedetails['name'], '.')), 1); //get the extension
            $arr_ext = array('jpg', 'jpeg', 'doc', 'pdf'); //set allowed extensions

            $setNewFileName = time() . "_" . rand(000000, 999999);
            if (in_array($ext, $arr_ext)) {
                $dest_path = WWW_ROOT . 'uploads/' . $destination . '/' . $setNewFileName . '.' . $ext;
                move_uploaded_file($filedetails['tmp_name'], $dest_path);
                //prepare the filename for database entry 
                $imageFileName = $setNewFileName . '.' . $ext;
            }
        }
        return $imageFileName;
    }

    public function isAuthorized($user) {
        if (isset($user['role'])) {
            return true;
        }
        // Default deny
        return false;
    }

}
