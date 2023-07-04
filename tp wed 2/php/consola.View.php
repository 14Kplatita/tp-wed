<?php
require_once './libs/Smarty.class.php';

class consolaView{

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showHomePage(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('page', 'Consolas');
        $this -> smarty -> display ('./templates/home.tpl');
    }

    function showcontenidoPage($fabricante){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('page', 'contenido');
        $this -> smarty -> assign ('fabricante', $fabricante);
        $this -> smarty -> display ('./templates/contenido.tpl');
    }

    public function showmodelos($modelos, $fabricante){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('modelos', $modelos);
        $this -> smarty -> assign ('fabricante', $fabricante);
        $this -> smarty -> assign ('page','modelos');
        $this -> smarty -> display ('./templates/modelos.tpl');
    }

    public function EditarContenido($id, $fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos){
        $action = 'actualizar/'.$id; 
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('action', $action);
        $this -> smarty -> assign ('fabricante', $fabricante);
        $this -> smarty -> assign ('modelo', $modelo);
        $this -> smarty -> assign ('especificaciones', $especificaciones);
        $this -> smarty -> assign ('imagen', $imagen);
        $this -> smarty -> assign ('historia', $historia);
        $this -> smarty -> assign ('juegos', $juegos);
        $this -> smarty -> assign ('id', $id);
        $this -> smarty -> display('./templates/editar.tpl');
    }

    public function MostarElModelo($elmodelo, $fabricante){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('elmodelo', $elmodelo);
        $this -> smarty -> assign ('fabricante', $fabricante);
        $this -> smarty -> assign ('page','modelo');
        $this -> smarty -> display ('./templates/modelo.tpl');
    }

    public function MostarCategoriasPorFabricante($fabricante, $modelos){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('modelos', $modelos);
        $this -> smarty -> assign ('fabricante', $fabricante);
        $this -> smarty -> assign ('page','modelos');
        $this -> smarty -> display ('./templates/LosModelos.tpl');
    }

    public function MostarElAñadirUnaCategorias(){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('page','categorias');
        $this -> smarty -> display ('./templates/añadir_categoria.tpl');
    }

    public function MostarLasCategorias($Categorias){
        $this -> smarty -> assign ('BASE_URL', BASE_URL);
        $this -> smarty -> assign ('Categorias', $Categorias);
        $this -> smarty -> assign ('page','Categorias');
        $this -> smarty -> display ('./templates/Mostar_categorias.tpl');
    }
}


