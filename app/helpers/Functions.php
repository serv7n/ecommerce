<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
function check_session(){
    return isset($_SESSION['user']);
}
function printData($data, $die = true){
    if(is_object($data) || is_array($data)){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }else{
        echo $data;
    }

    if($die  == true){
        die('<h1>FIM</h1>');
    }
}

function logger($messegem = '', $level = 'info'){
    $log = new Logger('registros_logs');
    $log->pushHandler( handler: new StreamHandler('logs.log'));
    switch($level){
        case 'info':
            $log->info($messegem);
            break;
        
        case 'notice':
            $log->notice($messegem);
            break;
            
        case 'warning':
            $log->warning($messegem);
            break;
                       
        case 'error':
            $log->error($messegem);
            break;
        case 'critical':
            $log->critical($messegem);
            break;
        
        case 'emergency':
            $log->emergency($messegem);
            break;
        
        default:
            $log->info($messegem);
            break;
                     
        }}


?>