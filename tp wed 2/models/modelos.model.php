<?php
    
Class modelosmodel{

        private $db; 
    

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=database', 'root', '');
            
        }

        public function obtenermodelos(){
            $query = $this->db->prepare('SELECT * FROM modelos');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
		public function obtenermodelo($id){
            $query = $this->db->prepare("SELECT * FROM modelos WHERE modelos_id = ?");
            $query->execute(array($id));
            return $query->fetch(PDO::FETCH_OBJ);
        }

        public function obtenerModelosPorFabricante($Porfabicante){
            $query = $this->db->prepare("SELECT * FROM `modelos` WHERE categoria_id = ?");
            $query->execute(array($Porfabicante));
            return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function eliminar($id){
            $query=$this->db->prepare("DELETE from `modelos` WHERE modelos_id = ? ");
            $query->execute(array($id));
        }
		public function ActualizarModelo($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $id=' '){
            $query = $this->db->prepare("UPDATE modelos SET modelos_modelo = :modelo, modelos_especificaciones = :espesificaciones, modelos_imagen = :imagen, modelos_historia = :historia, modelos_juegos = :juegos, categoria_id = :fabricante WHERE modelos_id = :id");
            $query->execute([":fabricante" => $fabricante,
                             ":modelo" => $modelo,
                             ":espesificaciones" => $especificaciones,
                             ":imagen" => $imagen,
                             ":historia" => $historia,
                             ":juegos" => $juegos,
                             ":id" => $id]);
            return $this -> db ->lastInsertId();
        }

        public function addcontenido($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos=' '){
            $query = $this->db->prepare("INSERT INTO `modelos` (`modelos_modelo`, `modelos_especificaciones`, `modelos_imagen`, `modelos_historia`, `modelos_juegos`, `categoria_id`) VALUES (?,?,?,?,?,?)");
            $query->execute(array($modelo, $especificaciones, $imagen, $historia, $juegos, $fabricante));
            return $this -> db ->lastInsertId();
        }
	}