<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Curd;


class Common extends BaseController
{
    public function __construct()
    {
        $this->curd           = new Curd();
    }
    
    public function index()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || permission($this->dbcode.$this->page) == 1)) {
            $data['page_name']  = $this->page;
            $data['page_title'] = ucwords(str_replace('_', ' ', $this->page));
            $data['table']      =  $this->curd->selectData($this->dbcode.$this->page);
            $folderPath = APPPATH . 'Views/admin/'.$this->page; // Replace 'myfolder' with the folder name you want to check

            if (is_dir($folderPath)) {
                return view('admin/'.$this->page.'/list', $data);
            }
            if ($this->page == 'setting') {
                return $this->response->redirect(base_url('admin/setting/edit/1'));    
            }
            return view('admin/common/list', $data);
        }
        return view('admin/login');
    }

    public function addEdit($param1 = '')
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || permission($this->dbcode.$this->page) == 1)) {
             $data['page_name']  = $this->page;
            if ($param1 == '') {
                $data['page_title'] = 'Add '.ucwords(str_replace('_', ' ', $this->page));
            } else{
                $data['page_title'] = 'Edit '.ucwords(str_replace('_', ' ', $this->page));
                $data['singleRecord'] = $this->curd->singleData($this->dbcode.$this->page, ['id' => $param1]);
                $data['param'] = $param1;
            }
              $folderPath = APPPATH . 'Views/admin/'.$this->page;
            if (is_dir($folderPath)) {
                return view('admin/'.$this->page.'/add-edit', $data);
            }
            return view('admin/common/add-edit', $data);
        }
        
    }  

    public function delete()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || $_SESSION['role'] == 1)) {
            $id = $this->request->getPost('id');
            $page_name = $this->request->getPost('page_name');
            $image = $this->request->getPost('image');
            
            if (!empty($image)) {
                $imageArray = explode(',', $image);
                foreach ($imageArray as $img) {
                    if (file_exists($img)) {
                        unlink($img);  
                    }
                }
            }
            
            $result = $this->curd->deleteData($this->dbcode.$page_name, ['id' => $id]);
            
            if ($result) {
                $response = [
                    'responseCode' => 200,
                    'status' => 'success',
                    'message' => 'Record deleted successfully',
                    'url' => ""
                ];
            } else {
                $response = [
                    'responseCode' => 201,
                    'status' => 'error',
                    'message' => 'Something went wrong',
                    'url' => ""
                ];
            }
        } else {
            $response = [
                'responseCode' => 201,
                'status' => 'error',
                'message' => 'You do not have permission',
                'url' => ""
            ];
        }
        return $this->response->setJSON($response);  
    }
    
    public function update()
    {
        // Ensure the session has a 'name' value
        if (isset($_SESSION['user'])) {
            $id             = $this->request->getPost('id');
            $page_name      = $this->request->getPost('page_name');
            $redirect       = base_url('admin/' . $page_name);
            if ($page_name == 'setting') {
                $redirect = base_url('admin/' . $page_name . '/edit/' . $id);
            }
            
            $data = $this->request->getPost();
            unset($data['id'], $data['redirect'], $data['page_name']);
            
            // Convert arrays to JSON format for storage
            foreach ($data as $fieldName => $dta) {
                if (is_array($dta)) {
                    $data[$fieldName] = json_encode($dta);
                }
            }

            // Handle file uploads
            $files = $this->request->getFiles();
            foreach ($files as $fieldName => $file) {
                if (is_array($file)) { // Check if it's a multiple file upload
                    $filePaths = [];
                    foreach ($file as $singleFile) {
                        if ($singleFile->isValid() && !$singleFile->hasMoved()) {
                            $filePaths[] = $this->file_upload($id, $singleFile, $fieldName, $page_name);
                        }
                    }
                    $data[$fieldName] = json_encode($filePaths); // Store multiple file paths as JSON
                } else {
                    $data[$fieldName] = $this->file_upload($id, $file, $fieldName, $page_name);
                }
            }

            // Update or insert data
            
            if (!empty($id)) {
                if(!empty($data['name'])){
                    $data['slug'] = slug($data['name'], $id);
                }else{
                    $data['slug'] = $id.'-'.rand(0,100).time();
                }  
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['id' => $id]);
            } else {
                $res = $this->curd->addData($this->dbcode . $page_name, $data);
                if(!empty($data['name'])){
                    $data2['slug'] = slug($data['name'], $res);
                }else{
                    $data2['slug'] = $res.'-'.rand(0,100);
                } 
                $result = $this->curd->updateData($this->dbcode . $page_name, $data2, ['id' => $res]);
            }
            
            // Set response based on result
            if ($result > 0) {
                $response = [
                    'respocecode' => 200,
                    'status' => 'success',
                    'message' => label($page_name) . ' updated successfully',
                    'url' => $redirect
                ];
            } else {
                $response = [
                    'respocecode' => 201,
                    'status' => 'error',
                    'message' => 'Something went wrong',
                    'url' => ""
                ];
            }
        } else {
            $response = [
                'respocecode' => 401,
                'status' => 'error',
                'message' => 'You don’t have permission',
                'url' => ""
            ];
        }
        echo json_encode($response);
    }

    public function get_data(){

        $id = $this->request->getPost('id');
        $depend_table = $this->request->getPost('depend_table');
        $depend_cloumn = $this->request->getPost('depend_cloumn');
        $List = allData($depend_table,[$depend_cloumn => $id]);
        $html= '<option value="">Select </option>';
        if(!empty($List)){
            foreach($List as $li){
                $html.= '<option value="'.$li['id'].'">'.$li['name'].'</option>';
            }
            $response = array('status' =>'success', 'html'=>$html,'message'=>'Data fetched successfully');
            echo json_encode($response);
            return false;
        }
        $response = array('status' =>'errors', 'html'=>$html,'message'=>'Data not found');
        echo json_encode($response);
        return false;
    }

    public function upadateStatus()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || $_SESSION['role'] == 1)) {
            $id                         = $this->request->getPost('id');
            $page_name                  = $this->request->getPost('page_name');
            $singleRecord               = $this->curd->singleData($this->dbcode.$page_name,array('id'=>$id));
            if ($singleRecord['status'] == 0) {
                $data['status'] = 1;
            }elseif ($singleRecord['status'] == 1) {
                $data['status'] = 0;
            }
            $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['id' => $id]);
          if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Blog update successfully','url'=>"");
         }else{
             $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
            $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($result);
    }

     public function verification()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || $_SESSION['role'] == 1)) {
            $id                     = $this->request->getPost('id');
            $page_name              = $this->request->getPost('page_name');
            $data['verification']       = $this->request->getPost('status');
            $data['status_mess']    = $this->request->getPost('mess');  
            $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['id' => $id]);
          if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Blog update successfully','url'=>"");
         }else{
             $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
        $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($response);
    }



    










   


}
