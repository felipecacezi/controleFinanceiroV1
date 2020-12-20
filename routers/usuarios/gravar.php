<?php

    $body  = file_get_contents('php://input');

    require_once("../../controllers/Usuarios.class.php");    
    $controller = new UsuariosController();

    return json_encode($controller->initGravar($body));