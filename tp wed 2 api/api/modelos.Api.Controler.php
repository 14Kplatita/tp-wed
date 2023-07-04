<?php
require_once './models/modelos.model.php';
require_once './models/consola.model.php';
require_once 'json.php';

class modelosApiControler
{
    protected $modelosmodel;
    protected $consolamodel;
    protected $view;
    private $data;

    public function __construct()
    {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
        $this->modelosmodel = new modelosmodel();
        $this->consolamodel = new consolamodel();
    }

    function getData()
    {
        return json_decode($this->data);
    }

    public function Obtenertodo($params = null){
        $consolas = $this->consolamodel->ObtenerCategorias();
        $modelos= $this ->modelosmodel->obtenermodelos();
        $all=array($modelos, $consolas);
        $this->view->response($all, 200);
    }

    public function ObtenerModelos($params = null)
    {
        $modelos = $this->modelosmodel->obtenermodelos();
        $this->view->response($modelos, 200);
    }


    public function ObtenerElModelo($params = null)
    {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];

        $modelo = $this->modelosmodel->obtenermodelo($id);

        if ($modelo) {
            $this->view->response($modelo, 200);
        } else {
            $this->view->response("el modelo no existe id={$id}", 404);
        }
    }

    public function BorrarElModelo($params = [])
    {
        $id = $params[':ID'];
        $modelo = $this->modelosmodel->obtenermodelo($id);

        if ($modelo) {
            $this->modelosmodel->eliminarmodelo($id);
            $this->view->response("Categiria id=$id eliminad0 con éxito", 200);
        } else
            $this->view->response("Categiria id=$id not found", 404);
    }

    public function CrearModelo($params = [])
    {
        $body = $this->getData(); // la obtengo del body

            $fabricante = $body -> fabricante;
            $modelo = $body-> modelo;
            $especificaciones = $body-> especificaciones;
            $imagen = $body-> imagen;
            $historia = $body-> historia;
            $juegos = $body-> juegos;


        $nuevomodelo = $this->modelosmodel->addcontenido($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos);


        if ($nuevomodelo)
            $this->view->response($nuevomodelo, 200);
        else
            $this->view->response("Error al añadir el modelo nuevo", 500);

    }

    public function ActualizarElModelo($params = [])
    {
        $id = $params[':ID'];
        $Actualizar = $this->modelosmodel->obtenermodelo($id);

        if ($Actualizar) {
            $body = $this->getData();
            $fabricante = $body -> fabricante;
            $modelo = $body-> modelo;
            $especificaciones = $body-> especificaciones;
            $imagen = $body-> imagen;
            $historia = $body-> historia;
            $juegos = $body-> juegos;

            $this->modelosmodel->ActualizarModelo($fabricante, $modelo, $especificaciones, $imagen, $historia, $juegos, $id);
            $this->view->response("el modelo id=$id actualizado con éxito", 200);
        } else
            $this->view->response("el modelo id=$id not found", 404);
    }

    public function ObtenerlosModelos(){
        $sort='';
        if(isset($_GET['sort']))
            $sort = $_GET['sort'];
        $order='';
        if (isset($_GET['order']))
            $order = $_GET['order'];
        if(!empty($sort)&&!empty($order)){
            $modelo=$this->modelosmodel->obtenerlosmodelos($sort,$order);
            $this->view->response($modelo,200);  
        }
        else if(!empty($sort)&&empty($order)){
            $order="DESC";
            $modelo=$this->modelosmodel->obtenerlosmodelos($sort,$order);
            $this->view->response($modelo,200);  
        }
        else if(empty($sort)&&!empty($order)){
            $sort='modelos_id';
            $modelo=$this->modelosmodel->obtenerlosmodelos($sort,$order);
            $this->view->response($modelo,200);  
        }
         
        else {
            $modelo=$this->ObtenerModelos();
            $this->view->response($modelo,200);
        }
    }
}