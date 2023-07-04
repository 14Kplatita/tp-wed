<?php
require_once './models/usuario.model.php';
require_once './libs/usuario.php';
require_once 'json.php';

class usuarioApiControler
{

    private $UsuarioModel;
    private $view;
    private $data;

    public function __construct()
    {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
        $this->UsuarioModel = new UsuarioModel();
    }
    
    function getData()
    {
        return json_decode($this->data);
    }


    public function login(){
        
        $datos = $this->getData(); 
        $usuario = $datos->usuario;
        $contraseña = $datos->contraseña;

        if (empty($usuario) || empty($contraseña)) {
            $this->view->response("Debe indicar el nombre de usuario y la contraseña.", 400);
            return;
        }
        $usuario = $this->UsuarioModel->comprobarUsuario($usuario, $contraseña);
        if ($usuario) {
            $aut= new AuthHelper();
            $token=$aut->getToken($usuario);
            //$aut = new AuthHelper();
            //$token = $aut->getToken($usuario);
            $this->view->response($token, 200);
        } else {
            $this->view->response("Usuario o contraseña incorrecta.", 400);
        }
    }
}