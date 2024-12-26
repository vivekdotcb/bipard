<?php

namespace App\Controllers;
use App\Models\Curd;
class Home extends BaseController
{
     public function __construct()
    {
        $this->curd           = new Curd();
        $this->db = \Config\Database::connect();
    }
    public function index()
    {
        $data['page_name']          = 'home';
        $data['page_title']         = 'Home';
        return view('front/index', $data);
    }
}
