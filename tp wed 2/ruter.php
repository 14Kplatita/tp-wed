<?php
    require_once './controllers/consola.Controler.php';
    require_once './controllers/Usuario.Controler.php';
    require_once './controllers/Seccion.Controler.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'home';
    }


    $params = explode('/', $action);
    $consolaControler = new consolaControler();
    $UsuarioControler = new UsuarioControler();

    switch ($params[0]){
        case 'home':
            $consolaControler -> showHome();
        break;
        case 'contenido':
            $consolaControler -> contenido();
        break;
        case 'addcontenido':
            $consolaControler -> addcontenido();
        break;
        case 'modelos':
            $consolaControler -> MostarModelos();
        break;
        case 'modelo':
            $consolaControler -> obtenermodelo($params[1]);
        break;
        case 'categoria':
            $consolaControler -> AñadirUnaCategorias();
        break;
        case 'LosModelos':
            $consolaControler -> MostrarLosModelosPorCategoria($params[1]);
        break;
        case 'añadircategoria':
            $consolaControler -> añadircategoria();
        break;
        case 'categorias':
            $consolaControler -> MostarCategorias();
        break;
        case 'borrar':
            $consolaControler -> borrar($params[1]);
        break;
        case 'borrar_categoria':
            $consolaControler -> borrar_categoria($params[1]);
        break;
        case 'editar':
            $consolaControler -> editar($params[1]);
        break;
        case 'actualizar':
            $consolaControler -> actualizar($params[1]);
        break;
        case 'formulario';
            $UsuarioControler -> FormularioAdd();
        break;
        case 'enviar':
            $UsuarioControler -> enviar();
        break; 
        case 'login':
            $UsuarioControler -> showLogin();
        break;
        case 'inicio_seccion':
            $UsuarioControler -> inicio_seccion();
        break; 
    }