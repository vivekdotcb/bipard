<?php
use App\Models\Curd;

function permission($table){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->permission($table);
    }else{
        $result = $curd->permission($table, $where);
    }
    // if ($result > 0) {
    // 		return 1;
    		
    // }
        return $result;
} 

