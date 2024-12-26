<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Curd;


class Bipard extends BaseController
{
    public function __construct()
    {
        $this->curd           = new Curd();
    }
    
    public function text()
    {
        if (isset($_SESSION['user'])) {
            $id                     = $this->request->getPost('id');
            $page_name              = $this->request->getPost('page_name');
            $data['ans']            = $this->request->getPost('status');
            $data['question']       = $this->request->getPost('qus');
            $data['remark']         = $this->request->getPost('mess');
            $data['created_by']     = $_SESSION['user']['id'];  
            $data['name']           = $_SESSION['user']['name'];  
            $data['slug']           = $_SESSION['user']['name'].'-'.time(); 

            $row = allData($this->dbcode . $page_name, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id']]); 
            if (count($row) == 0 ) {
                $result = $this->curd->addData($this->dbcode . $page_name, $data);
            } else {
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id'] ]);
            }
            
        if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Update successfully','url'=>"");
        }else{
            $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
        $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($response);
    }

     public function newtext()
    {
        if (isset($_SESSION['user'])) {
            $id                     = $this->request->getPost('id');
            $page_name              = $this->request->getPost('page_name');
            $data['ans']            = $this->request->getPost('status');
            $data['question']       = $this->request->getPost('qus');
            $data['remark']         = $this->request->getPost('mess');
            $data['c_id']           = $this->request->getPost('c_id');
            $data['created_by']     = $_SESSION['user']['id'];  
            $data['name']           = $_SESSION['user']['name'];  
            $data['slug']           = $_SESSION['user']['name'].'-'.time(); 

            $row = allData($this->dbcode . $page_name, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'c_id' => $data['c_id']]); 
            if (count($row) == 0 ) {
                $result = $this->curd->addData($this->dbcode . $page_name, $data);
            } else {
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'c_id' => $data['c_id']]);
            }
            
        if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Update successfully','url'=>"");
        }else{
            $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
        $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($response);
    }

    public function textarea()
    {
        if (isset($_SESSION['user'])) {
            $id                     = $this->request->getPost('id');
            $page_name              = $this->request->getPost('page_name');
            $data['ans']            = $this->request->getPost('status');
            $data['question']       = $this->request->getPost('qus');
            $data['remark']         = $this->request->getPost('mess');  
            $data['name']           = $_SESSION['user']['name']; 
            $data['created_by']     = $_SESSION['user']['id'];
            $data['slug']           = $_SESSION['user']['name'].'-'.time(); 

            $row = allData($this->dbcode . $page_name, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id']]); 
            if (count($row) == 0 ) {
                $result = $this->curd->addData($this->dbcode . $page_name, $data);
            } else {
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id']]);
            }
            
        if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Update successfully','url'=>"");
        }else{
            $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
        $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($response);
    }

    public function number()
    {
        if (isset($_SESSION['user'])) {
            $id                     = $this->request->getPost('id');
            $page_name              = $this->request->getPost('page_name');
            $data['ans']            = $this->request->getPost('status');
            $data['question']       = $this->request->getPost('qus');
            $data['remark']         = $this->request->getPost('mess');  
            $data['name']           = $_SESSION['user']['name'];
            $data['created_by']     = $_SESSION['user']['id'];
            $data['slug']           = $_SESSION['user']['name'].'-'.time(); 

            $row = allData($this->dbcode . $page_name, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id']]); 
            if (count($row) == 0 ) {
                $result = $this->curd->addData($this->dbcode . $page_name, $data);
            } else {
                $result = $this->curd->updateData($this->dbcode . $page_name, $data, ['DATE(created_at)' => date('Y-m-d'), 'question' => $data['question'], 'created_by' => $_SESSION['user']['id']]);
            }
            
        if($result > 0){
            $response = array('respocecode'=>200,'status' => 'success', 'message'=> 'Update successfully','url'=>"");
        }else{
            $response = array('respocecode'=>201,'status' => 'success','message'=> 'Something went wrong','url'=>"");
            }
        }else{
        $response = array('respocecode'=>201,'status' => 'errors','message'=> 'You Dont have Permission','url'=>"");  
        }
        echo json_encode($response);
    }

    public function list()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || permission($this->dbcode.$this->page) == 1)) {
            $data['page_name']  = $this->page;
            $data['page_title'] = ucwords(str_replace('_', ' ', $this->page));
            $data['table']      =  $this->curd->selectData($this->dbcode.$this->page);
            $data['date']       =  $this->request->getPost('datee');
            $data['userid']     =  $this->request->getPost('userid');
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

    public function list_list()
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || permission($this->dbcode.$this->page) == 1)) {
            $data['page_name']  = $this->page;
            $data['page_title'] = ucwords(str_replace('_', ' ', $this->page));
            $data['table']      =  $this->curd->selectData($this->dbcode.$this->page);
            $data['date']       =  $this->request->getPost('datee');
            $data['userid']     =  $this->request->getPost('userid');
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



    public function add_edit($param1, $param2)
    {
        if (isset($_SESSION['user']) && ($_SESSION['role'] == 10 || permission($this->dbcode.$this->page) == 1)) {
             $data['page_name']  = $this->page;
            if ($param1 == '') {
                $data['page_title'] = 'Add '.ucwords(str_replace('_', ' ', $this->page));
            } else{
                $data['page_title'] = 'Edit '.ucwords(str_replace('_', ' ', $this->page));
                $data['date'] = $param1;
                $data['userid'] = $param2;
            }
            $folderPath = APPPATH . 'Views/admin/'.$this->page;
            if (is_dir($folderPath)) {
                return view('admin/'.$this->page.'/add-edit', $data);
            }
            return view('admin/common/add-edit', $data);
        }
    } 


    public function training_report()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'training_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/training_report', $data);
        }
        return view('admin/login');
    }
    public function mess_report()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'mess_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/mess_report', $data);
        }
        return view('admin/login');
    }
    public function hostel_report()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'hostel_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/hostel_report', $data);
        }
        return view('admin/login');
    }

    
    public function night_inspection()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'night_inspection';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/night_inspection', $data);
        }
        return view('admin/login');
    }
    public function mess_inspection()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'mess_inspection';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/mess_inspection', $data);
        }
        return view('admin/login');
    }
    public function hostel_inspection()
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'hostel_inspection';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            return view('admin/hostel_inspection', $data);
        }
        return view('admin/login');
    }



     public function training_daily_report($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'training_daily_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['userid'] = $param1;

            return view('admin/training_daily_report/list', $data);
        }
        return view('admin/login');
    }   

     public function mess_daily_report($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'mess_daily_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['userid'] = $param1;
            return view('admin/mess_daily_report/list', $data);
        }
        return view('admin/login');
    }  

    public function hostel_daily_report($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'hostel_daily_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['userid'] = $param1;
            return view('admin/hostel_daily_report/list', $data);
        }
        return view('admin/login');
    }    

    public function hostelDailyReport($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'hostel_daily_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['userid'] = $param1;
            return view('admin/hostel_daily_report/add-edit', $data);
        }
        return view('admin/login');
    }  

     public function mess_inspection_report($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'mess_inspection_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['mess_id'] = $param1;

            return view('admin/mess_inspection_report/list', $data);
        }
        return view('admin/login');
    }

     public function hostel_inspection_report($param1)
    {
        if (isset($_SESSION['user'])) {
            $data['page_name']  = 'hostel_inspection_report';
            $data['page_title'] = ucwords(str_replace('_', ' ', $data['page_name']));
            $data['hostel_id'] = $param1;

            return view('admin/hostel_inspection_report/list', $data);
        }
        return view('admin/login');
    }
}
