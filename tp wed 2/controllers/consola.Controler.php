<?php

require_once './php/consola.View.php';
require_once './models/consola.model.php';
require_once './models/modelos.model.php';


class consolaControler{

    private $consolaview;
    private $consolamodel;
    private $modelosmodel;

    public function __construct(){
        $this->consolaview = new consolaView();
        $this->consolamodel = new consolaModel();
        $this->modelosmodel = new modelosmodel();
    }

    function showHome(){
        $this-> consolaview->showHomePage();
    }

    function contenido(){
        $fabricante=$this->consolamodel->ObtenerCategorias();
        $this-> consolaview->showcontenidoPage($fabricante);
    }

    function AñadirUnaCategorias(){
        $this-> consolaview-> MostarElAñadirUnaCategorias();
    }

    //consolas
    function añadircategoria(){
        $fabricante = $_POST['categoria_fabricante'];
        $logo = $_POST['categoria_logo'];
        $this -> consolamodel -> AñadirLaCategoria($fabricante, $logo);
        header("Location: " . BASE_URL . 'home');
    }

    public function MostarCategorias(){
        $Categorias=$this->consolamodel->ObtenerCategorias();
        if(!empty($Categorias)){
            $this->consolaview->MostarLasCategorias($Categorias);
        }
    }
    public function MostrarLosModelosPorCategoria($Porfabicante){
        $fabricante=$this->consolamodel->obtenerCategoriaPorNombre($Porfabicante);
        $modelos=$this->modelosmodel->obtenerModelosPorFabricante($Porfabicante);
        if(!empty($fabricante)){
            $this->consolaview->MostarCategoriasPorFabricante($fabricante, $modelos);
        }
    }

    public function borrar_categoria($id){
        if(isset($id)&&!empty($id)){
        $this->consolamodel->eliminar_categoria($id);
        header("Location: " . BASE_URL . 'categorias');
        }
    }


    //modelos
    function editar($id){
        $ModelosEditar=$this->modelosmodel->obtenermodelo($id);
        $fabricante=$this->consolamodel->ObtenerCategorias();
        $modelo = $ModelosEditar -> modelos_modelo;
        $especificaciones = $ModelosEditar -> modelos_especificaciones;
        $imagen = $ModelosEditar -> modelos_imagen;
        $historia = $ModelosEditar -> modelos_historia;
        $juegos = $ModelosEditar -> modelos_juegos;
        $this -> consolaview -> EditarContenido($id, $fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos);
    }

    function actualizar($id){
        $fabricante = $_POST['modelo_fabricante'];
        $modelo = $_POST['modelo_modelo'];
        $especificaciones = nl2br($_POST['modelo_especificaciones'],false);
        $imagen = $_POST['modelo_imagen'];
        $historia = nl2br($_POST['modelo_historia'],false); 
        $juegos = nl2br($_POST['modelo_juegos'],false);
        $this -> modelosmodel -> ActualizarModelo($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $id);
            header("Location:".BASE_URL. 'modelos' );
    }

    public function MostarModelos(){
        $modelos=$this->modelosmodel->obtenermodelos();
        $fabricante=$this->consolamodel->ObtenerCategorias();
        if(!empty($modelos)){
            $this->consolaview->showmodelos($modelos, $fabricante);
        }
    }

    public function obtenermodelo($id){
        $elmodelo=$this->modelosmodel->obtenermodelo($id);
        $fabricante=$this->consolamodel->obtenerCategoria($elmodelo->categoria_id );
        if(!empty($elmodelo)){
            $this->consolaview->MostarElModelo($elmodelo, $fabricante);
        }
    }

    public function borrar($id){
        if(isset($id)&&!empty($id)){
        $this->modelosmodel->eliminar($id);
        header("Location: " . BASE_URL . 'modelos');
        }
    }

    public function addcontenido(){
        $fabricante = $_POST['modelo_fabricante'];
        $modelo = $_POST['modelo_modelo'];
        $especificaciones = nl2br($_POST['modelo_especificaciones'],false);
        $imagen = $_POST['modelo_imagen'];
        $historia = nl2br($_POST['modelo_historia'],false); 
        $juegos = nl2br($_POST['modelo_juegos'],false);
            $this -> modelosmodel -> addcontenido($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos);
            header("Location:".BASE_URL. 'modelos' );
    }
    
}

