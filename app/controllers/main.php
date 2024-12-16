<?php

namespace app\Controllers;

use app\Controllers\baseController;
use app\Models\MainModel;
use app\Controllers\compra;


class main extends baseController
{
    function index(){
        $this->view('layouts/nav');
        
        $this->produtos();
        $this->view('index');
        $this->view('layouts/footer');
    }
    function contato(){
        $this->view('layouts/nav');
        $this->view('contato');
        $this->view('layouts/footer');
    }
    function sobre(){
        $this->view('layouts/nav');
        $this->view('sobre');
        $this->view('layouts/footer');
    }
    function categoria(){
        $this->view(view: 'layouts/nav');
        $this->view('categoria');
        $this->view(view: 'layouts/footer');
    }
    
    function produtos(){
        $MainModel = new MainModel();
        
        $_SESSION['produtos'] = $MainModel->pegar_produtos()->results;
        
    }


    function erro404($message){
        $this->view('layouts/404',$message);
    }
}
