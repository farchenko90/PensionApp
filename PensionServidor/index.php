<?php

    include_once 'Slim/Slim.php';

    \Slim\Slim::registerAutoloader();
    $app = new \Slim\Slim();

    include_once 'Conexion/conexion.php';

    include_once 'Modelos/Rol.php';
    include_once 'Modelos/Usuarios.php';
    include_once 'Modelos/Salas.php';
    include_once 'Modelos/Historicosalas.php';
    
    include_once 'Modelos/RolDao.php';    
    include_once 'Modelos/UsuariosDao.php';
    include_once 'Modelos/SalasDao.php';
    include_once 'Modelos/HistoricosalasDao.php';
    
    include_once 'Controlador/RolControl.php';
    include_once 'Controlador/UsuarioControl.php';
    include_once 'Controlador/SalasControl.php';
    include_once 'Controlador/HistoricosalasControl.php';
    

    $app->run();
