<?php
require_once './libs/Smarty.class.php';

class UsuarioView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showlogin(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'login');
        $this -> smarty -> display ('./templates/login.tpl');
    }
    function FormularioAdd(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('titulo', 'formulario');
        $this -> smarty -> display ('./templates/formulario.tpl');
    }
}

