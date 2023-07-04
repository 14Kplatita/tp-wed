<?php
require_once './models/consola.model.php';
require_once 'json.php';

class consolaApiControler
{
    protected $consolamodel;
    protected $view;
    private $data;


    public function __construct()
    {
        $this->view = new JSONView();
        $this->data = file_get_contents("php://input");
        $this->consolamodel = new consolamodel();
    }

    function getData()
    {
        return json_decode($this->data);
    }

    public function ObtenerConsolas($params = null)
    {
        $Categorias = $this->consolamodel->ObtenerCategorias();
        $this->view->response($Categorias, 200);
    }

    public function ObtenerlaConsola($params = null)
    {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];

        $Categoria = $this->consolamodel->obtenerCategoria($id);

        if ($Categoria) {
            $this->view->response($Categoria, 200);
        } else {
            $this->view->response("No existe la Categoria con el id={$id}", 404);
        }
    }

    public function BorrarlaConsola($params = [])
    {
        $id = $params[':ID'];
        $Categoria = $this->consolamodel->obtenerCategoria($id);

        if ($Categoria) {
            $this->consolamodel->eliminar_categoria($id);
            $this->view->response("Categiria id=$id eliminad0 con éxito", 200);
        } else
            $this->view->response("Categiria id=$id not found", 404);
    }

    public function CrearConsolas($params = [])
    {
        $body = $this-> getData(); // la obtengo del body

        $fabricante = $body->fabricante;
        $logo = $body->logo;

        // inserta la cancion
        $nuevaCategiria = $this->consolamodel->AñadirLaCategoria($fabricante, $logo);


        if ($nuevaCategiria)
            $this->view->response($nuevaCategiria, 200);
        else
            $this->view->response("Error al insertar la Categoria", 500);

    }

    public function ActualizarlaConsola($params = [])
    {
        $id = $params[':ID'];
        $body = $this->getData();

        $Actualizar = $this->consolamodel->obtenerCategoria($id);

        if ($Actualizar) {
            $fabricante = $body->fabricante;
            $logo = $body->logo;

            $this->consolamodel->ActualizarCategoria($fabricante, $logo, $id);
            $this->view->response("El fabricante ID=$id actualizado con éxito", 200);
        } else
            $this->view->response("El fabricante ID=$id not found", 404);
    }

    public function ObtenerlasConsolas(){
        $sort='';
        if(isset($_GET['sort']))
            $sort = $_GET['sort'];
        $order='';
        if (isset($_GET['order']))
            $order = $_GET['order'];
        if(!empty($sort)&&!empty($order)){
            $Consolas=$this->consolamodel->ObtenerlasConsolas($sort,$order);
            $this->view->response($Consolas,200);  
        }
        else if(!empty($sort)&&empty($order)){
            $order="DESC";
            $Consolas=$this->consolamodel->ObtenerlasConsolas($sort,$order);
            $this->view->response($Consolas,200);  
        }
        else if(empty($sort)&&!empty($order)){
            $sort='modelos_id';
            $Consolas=$this->consolamodel->ObtenerlasConsolas($sort,$order);
            $this->view->response($Consolas,200);  
        }
         
        else {
            $Consolas=$this->ObtenerConsolas();
            $this->view->response($Consolas,200);
        }
    }
}