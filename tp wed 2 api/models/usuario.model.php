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
        
        public function comprobarUsuario($usuario,$contraseña){
        
            try {
                $user = $this ->ObtenerUruario($usuario);
    
                if ($user && password_verify($contraseña, $user['password_hash'])) {
                    // La contraseña es válida, el usuario existe y las credenciales son correctas.
                    return $user;
                }
            } catch (PDOException $e) {
                error_log('Error en la consulta de comprobación de usuario: ' . $e->getMessage());
                return null; 
            }
        }
}