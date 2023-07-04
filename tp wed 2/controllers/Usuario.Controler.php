<?php

require_once './php/Usuario.View.php';
require_once './models/usuario_guardar.php';
require_once './usuario/ayuda.php';

class UsuarioControler{

    private $view;
    private $Model;
    private $usuariomodel;
    private $usuario;
    public function __construct(){
        $this->view = new UsuarioView();
        $this->usuariomodel = new UsuarioModel(); 
        $this->usuario = new ayuda();

    }

    function showLogin(){
        $this -> view -> showLogin('');
    }
    public function FormularioAdd(){
        $this -> view -> FormularioAdd('');
    }

    function inicio_seccion(){
        $usuario = $_POST['usuario_nombre'];
        $password = $_POST['usuario_contraseña1'];
        $elusuario = $this->usuariomodel->ObtenerUruario($usuario);
        if (!empty($elusuario) && password_verify($password, $elusuario->password)) {
            $this -> usuario -> setUser($elusuario);
            header("Location: " . BASE_URL . 'home');
        }
    }


    public function enviar(){
        $nombre = $_POST['usuario_nombre'];
        $apellido = $_POST['usuario_apellido'];
        $usuario = $_POST['usuario_usuario'];
        $contraseña = $_POST['usuario_contraseña1'];
        $email = $_POST['usuario_email']; 
            $this -> usuariomodel -> addusuario($nombre, $apellido, $usuario, $contraseña, $email);
            header("Location:".BASE_URL.'home' );
    }
    
}