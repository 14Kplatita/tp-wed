<?php
    
Class UsuarioModel{

        private $db; 
    

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=database', 'root', '');
            
        }
         
        public function ObtenerUruario($usuario){
            $query = $this->db->prepare("SELECT * FROM usuario WHERE usuario_usuario = :usuario");
            $query->execute(array(':usuario' => $usuario));
            return $query->fetch(PDO::FETCH_ASSOC);
        }

        public function addusuario($nombre, $apellido, $usuario, $email, $contraseña=' '){
            $query = $this->db->prepare("INSERT INTO  `usuario`( `usuario_nombre`, `usuario_apellido`, `usuario_usuario`, `usuario_contraseña`, `usuario_email`) VALUES (?,?,?,?,?)");
            $query->execute(array($nombre, $apellido, $usuario, $email, $contraseña));
            return $this -> db ->lastInsertId();
        }
}
