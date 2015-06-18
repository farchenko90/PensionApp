<?php
$app->get('/usuario/:correo','lista');

function lista($correo){
    
    $usuDao = new UsuarioDao();
    
    $res = $usuDao->lista($correo);
    
    echo json_encode($res,JSON_PRETTY_PRINT);
    
}




