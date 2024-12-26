<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{


	protected $table = 'db_admin';
	public function islogin($username, $password)
    {

    $db = \Config\Database::connect();

        foreach ($db->table('db_admin')->where(['username' => $username])->where(['password' => $password])->where(['status' => 1])->get()->getResultArray() as $r) {
        	return $r;
        }
    }
}