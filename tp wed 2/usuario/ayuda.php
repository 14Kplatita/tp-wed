<?php

    class ayuda{

        public function __construct() {   
        }

        public static function setUser($elusuario){
            session_start();
            $_SESSION['elusuario'] = $elusuario;
            $_SESSION['loggueado'] = true;
        }

        
        public function logout() {
            session_start();
            session_unset();
            session_destroy();
        }

        public function checkLoggedIn() {
            session_start();
            if (isset($_SESSION['loggueado']) && $_SESSION['loggueado'] == true){
                return true;
            }else{
                return false;
            }      
        }
    }