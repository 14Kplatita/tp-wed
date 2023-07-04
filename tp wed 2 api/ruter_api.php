<?php
require_once './libs/Ruter.php';
require_once './api/consola.Api.Controler.php';
require_once './api/modelos.Api.Controler.php';
require_once './api/usuario.Api.Controler.php';
// crea el router
$router = new Router();

$router->addRoute("todo", "GET", "modelosApiControler","Obtenertodo");
// rutea Modelos
$router->addRoute('modelos', 'GET', 'modelosApiControler', 'ObtenerlosModelos');
$router->addRoute('modelos', 'POST', 'modelosApiControler', 'modelosApiControler');
$router->addRoute('modelos/:ID', 'GET', 'modelosApiControler', 'ObtenerElModelo');
$router->addRoute('modelos/:ID', 'DELETE', 'modelosApiControler', 'BorrarElModelo');
$router->addRoute('modelos/:ID', 'PUT', 'modelosApiControler', 'ActualizarElModelo');
// rutea consolas
$router->addRoute('consolas', 'GET', 'consolaApiControler', 'ObtenerlasConsolas');
$router->addRoute('consolas', 'POST', 'consolaApiControler', 'CrearConsolas');
$router->addRoute('consolas/:ID', 'GET', 'consolaApiControler', 'ObtenerlaConsola');
$router->addRoute('consolas/:ID', 'DELETE', 'consolaApiControler', 'BorrarlaConsola');
$router->addRoute('consolas/:ID', 'PUT', 'consolaApiControler', 'ActualizarlaConsola');
// rutea
$router->addRoute('login', 'POST', 'usuarioApiControler', 'login');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
?>