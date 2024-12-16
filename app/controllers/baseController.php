<?php 
namespace app\Controllers;
session_start();
abstract class baseController{
    public function  view($view,$data = []){
        
        if(is_object($data)){
            $data = get_object_vars($data);
            
        }
        else if(!(is_array($data))){
            die("data not is  array");
        }
        extract($data);
        
        $file = dirname(__FILE__, levels: 2)."/views/$view.php";
        if(file_exists(filename: $file)){
            require_once($file);
        }else{
            die('erro view not exit '. $view);
        }
        

    }
}
