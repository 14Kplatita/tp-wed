<?php


require_once './models/usuario_guardar.php';

class SeccionControler{

    

    private $view;

    public function __construct(){
        $this->view = new SeccionView();
        
    }
    
}