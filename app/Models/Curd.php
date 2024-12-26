<?php

namespace App\Models;

use CodeIgniter\Model;

class Curd extends Model
{
	protected $DBGroup = 'default';
   	public function selectData($table, $where = array())
   	{
 		$builder = $this->db->table($table);
 		$builder->select("*");
 		$builder->where($where);
 		$builder->orderBy('id', 'DESC');
 		$query = $builder->get();
 		return $query->getResultArray(); 
	}

	public function selectDataA($table, $where = array())
   	{
 		$builder = $this->db->table($table);
 		$builder->select("*");
 		$builder->where($where);
 		$query = $builder->get();
 		return $query->getResultArray(); 
	}

	public function singleData($table, $where = array())
  	{
 		$builder = $this->db->table($table);
 		$builder->select("*");
 		$builder->where($where);
 		$query = $builder->get();
 		return $query->getRowArray();
	}

	public function limitData($table, $limit, $where = array())
  	{
 		$builder = $this->db->table($table);
 		$builder->select("*");
 		$builder->where($where);
 		$builder->limit($limit); 
 		$query = $builder->get();
 		return $query->getResultArray();
	}

	public function getRecordsbyLike($table, $field, $searchTerm, $condition = [])
    {
		if (!empty($searchTerm)) {
			$builder = $this->db->table($table);
			$builder->like($field, $searchTerm);
			if (!empty($condition)) {
				$builder->where($condition);
			}
			$query = $builder->get();
			return $query->getResultArray(); 
		}
    }

	public function countData($table, $where = array())
  	{
 		$builder = $this->db->table($table);
 		$builder->select("*");
 		$builder->where($where);
 		// $query = $builder->get();
 		return $builder->countAllResults();
	}


	public function addData($table, $data)
	{
		$db = \Config\Database::connect();
	    $db->table($table)->insert($data);
	    return $db->insertID();
	}

	public function addArray($table, $data)
	{
		$db = \Config\Database::connect();
	    return  $db->table($table)->insertBatch($data);
	}

	public function deleteData($table, $where = array())
	{
		$db = \Config\Database::connect();
        return $db->table($table)->where($where)->delete();
	}

	public function updateData($table, $data, $where = array())
	{
		$db = \Config\Database::connect();
        return $db->table($table)->where($where)->update($data);
	}

	public function table_name()
	{
		$db = \Config\Database::connect();
     	$database = $db->database;
     	$query = $db->query("SHOW TABLES");
     	$tables = $query->getResultArray();
     	$tableNames = array_map(function($table) {
         return reset($table);
     	}, $tables);
     	return json_encode($tableNames); 	
	}

	public function column_name($table)
	{
      	$db 			= \Config\Database::connect();
		$tableName 	= $table;
		$query 		= $db->query("SHOW COLUMNS FROM {$tableName}");
		$columns 	= $query->getResultArray();
		$columnNames = array_column($columns, 'Field');
		return json_encode($columns); 
	}	



	public function permission($table)
  	{
 		$builder = $this->db->table('db_permission t1');
 		$builder->join('db_table t2', 't2.id = t1.table');
 		$builder->where('t1.admin_type' , $_SESSION['role']);
 		$builder->where('t1.status' , 1);
 		$builder->where('t2.name' , $table);
 		return $builder->countAllResults();
	}
}