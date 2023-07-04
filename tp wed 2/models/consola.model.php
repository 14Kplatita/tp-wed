<?php
    
Class consolamodel{

        private $db; 
    

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=database', 'root', '');
            
        }

        public function ObtenerCategorias(){
            $query = $this->db->prepare('SELECT * FROM consolas');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function obtenerCategoria($id){
            $query = $this->db->prepare("SELECT * FROM consolas WHERE categoria_id = ?");
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function obtenerCategoriaPorNombre($Porfabicante){
            $query = $this->db->prepare("SELECT * FROM consolas WHERE categoria_id = ?");
            $query->execute(array($Porfabicante));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function eliminar_categoria($id){
            $query=$this->db->prepare("DELETE from `consolas` WHERE categoria_id = ? ");
            $query->execute(array($id));
        }

        public function AñadirLaCategoria($fabricante, $logo=' '){
            $query = $this->db->prepare("INSERT INTO `consolas` (`categoria_fabricante`,`categoria_logo`) VALUES (?,?)");
            $query->execute(array($fabricante, $logo));
            return $this -> db ->lastInsertId();
        }
        public function ActualizarCategoria($fabricante,$logo, $id=' '){
            $query = $this->db->prepare("UPDATE consolas SET categoria_fabricante = :fabricante, categoria_logo = :logo, categoria_id = :categoria WHERE categoria_id = :id");
            $query->execute([":fabricante" => $fabricante,
                             ":logo" => $logo,
                             ":id" => $id]);
            return $this -> db ->lastInsertId();
        }
}