<?php
$app->get('/usuario/:correo','lista');
$app->put('/usuario','modificarfoto');
$app->post('/user','guardarfoto');
$app->get('/user/:correo','fotolista');

function fotolista($correo){
    
    $usuDao = new UsuarioDao();
    
    $res = $usuDao->Nombimagen($correo);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}

function lista($correo){
    
    $usuDao = new UsuarioDao();
    
    $res = $usuDao->lista($correo);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}

function guardarfoto(){
    
    $r = \Slim\Slim::getInstance()->request(); //pedimos a Slim que nos mande el request
    $p = json_decode($r->getBody()); //como el request esta en json lo decodificamos
    if (!is_dir("imagenes/")) {
        mkdir("imagenes/", 0777);
        $fp = fopen('imagenes/img.jpg', 'wb');
        fwrite($fp, $r->getBody());
    }

    
    
    
}

function modificarfoto(){
    
    $uDao = new UsuarioDao();
    $usu = new Usuario();
    
    $r = \Slim\Slim::getInstance()->request(); //pedimos a Slim que nos mande el request
    $p = json_decode($r->getBody()); //como el request esta en json lo decodificamos
    
    $usu->setFoto_usua($p->Foto_usua);
    $usu->setEmai_usua($p->Emai_usua);
    $res = $uDao->modificarfotos($usu);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}




