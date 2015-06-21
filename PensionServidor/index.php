<?php

    include_once 'Slim/Slim.php';

    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();

    include_once 'Conexion/conexion.php';

    include_once 'Modelos/Usuario.php';
    
    include_once 'Modelos/UsuarioDao.php';
    
    include_once 'Controlador/UsuarioControl.php';

    $app->run();
