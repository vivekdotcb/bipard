<?php
use App\Models\Curd;

function convertYoutube($string, $w, $h) {
    return preg_replace(
    "/[a-zA-Z\/\/:\.]*youtu(?:be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)(?:[&?\/]t=)?(\d*)(?:[a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
    "<iframe width=\"".$w."\" height=\"".$h."\" src=\"https://www.youtube.com/embed/$1?start=$2\" allowfullscreen></iframe>",
        $string
        );
            
}

function filtertext($value)
{
    if ($value != '' ) {
       $word = strtolower(str_replace(" ", "-", $value));
        return $word; 
    }else{
        return '';
    }   
}

function rfiltertext($value)
{
    if ($value != '' ) {
       $word = ucwords(str_replace("-", " ", $value));
        return $word; 
    }else{
        return '';
    }   
}

function label($value)
{
    if ($value != '' ) {
       $word = ucwords(str_replace("_", " ", $value));
        return $word; 
    }else{
        return '';
    }   
}

function dt($date){

    if ($date != '') {
        $date=date_create($date);
        return date_format($date," h:i A, d/m/Y");
    }else{
        return '';
    } 


}

function tm($date){

    if ($date != '') {
        $date=date_create($date);
        return date_format($date,"h:i A");
    }else{
        return '';
    } 
}

function allData($table, $where = [] ){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->selectData($table);
    }else{
        $result = $curd->selectData($table, $where);
    }
        return $result;
}  

function allDataA($table, $where = [] ){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->selectDataA($table);
    }else{
        $result = $curd->selectDataA($table, $where);
    }
        return $result;
}  

function limitData($table, $limit, $where = [] ){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->limitData($table, $limit);
    }else{
        $result = $curd->limitData($table,$limit,  $where);
    }
        return $result;
}

function countData($table, $where = [] ){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->countData($table);
    }else{
        $result = $curd->countData($table, $where);
    }
        return $result;
}  



function singleData($table, $where = []){
    $curd           = new Curd();
    if (empty($where)) {
        $result = $curd->singleData($table);
    }else{
        $result = $curd->singleData($table, $where);
    }
        return $result;
} 


function getSetting($value){
    if (empty($value) || $value == 0) {
        return '';
    } else {
        return singleData('db_setting', ['id' => 1])[$value];
    }
}

function table(){
    $curd           = new Curd();
    return $curd->table_name();
} 

 function column($table){
    $curd           = new Curd();
    return $curd->column_name($table);
}  

if (!function_exists('getrout')) 
{
    function getrout() {
        $request = \Config\Services::request();
        $requestUri = $request->getUri()->getPath();
        $adminPosition = strpos($requestUri, 'admin/');
        
        if ($adminPosition !== false) {
            $urlAfterAdmin = substr($requestUri, $adminPosition + strlen('admin/'));
            $segments = explode('/', $urlAfterAdmin);
            return $segments[0] ?? null;
        }
        return null;
    }


}
function isJson($string) {
    json_decode($string);
    return (json_last_error() == JSON_ERROR_NONE);
}

function slug($string, $id) { 
    $string = strtolower($string);
    $string = str_replace(' ', '-', $string);
    $string = str_replace('&', 'and', $string);
    $string = str_replace(',', '', $string);
    $string = preg_replace('/[^a-z0-9\-]/', '', $string);
    $string = preg_replace('/-+/', '-', $string);
    $string = trim($string, '-');
    $slug = $id . '-' . $string;
    return $slug;
}

function getIdBySlug($slug) {
    $words = explode(' ', str_replace('-', ' ', $slug));
    $firstValue = $words[0];
    return $firstValue;
}

