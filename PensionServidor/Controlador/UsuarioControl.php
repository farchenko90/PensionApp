<?php
$app->get('/usuario/:correo','lista');
$app->put('/usuario/:ced','modificarusuario');

function lista($correo){
    
    $usuDao = new UsuarioDao();
    
    $res = $usuDao->lista($correo);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}

function modificarfoto(){
    
    $uDao = new UsuarioDao();
    $usu = new Usuario();
    
    $r = \Slim\Slim::getInstance()->request(); //pedimos a Slim que nos mande el request
    $p = json_decode($r->getBody()); //como el request esta en json lo decodificamos
    
    $usu->setFoto_usua($p->Foto_usua);
    $res = $uDao->modificarfotos($usu);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}




