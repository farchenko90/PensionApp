<?php

class UsuarioDao {

    public function lista($correo){
        $conn = new conexion();
        $user = null;
        try {
            if($conn->conectar()){
                $str_sql = "Select nomb_usua,apel_usua,foto_usua,tele_usua from "
                        . "usuario where emai_usua = '".$correo."'";
                $sql = $conn->getConn()->prepare($str_sql);
                $sql->execute();
                $resultado = $sql->fetchAll();
                foreach ($resultado as $row){
                    $usuario = new Usuario();
                    $usuario->mapear($row);
                    $user[] = array(
                        "nomb_usua" => $usuario->getNomb_usua(),
                        "apel_usua" => $usuario->getApel_usua(),
                        "foto_usua" => $usuario->getFoto_usua(),
                        "tele_usua" => $usuario->getTele_usua()
                    );
                }
                
            }
        } catch (Exception $exc) {
            $user = null;
            echo $exc->getTraceAsString();
        }
        $conn->desconectar();
        return $user;
    }

    public function modificarfotos(Usuario $usu){
        $conn = new conexion();
        $usua = -1;
        try {
            if($conn->conectar()){
                $str_sql = "Update usuario set foto_usua = '".$usu->getFoto_usua()."'"
                        . " where emai_usua = '".$usu->getEmai_usua()."'";
                $sql = $conn->getConn()->prepare($str_sql);
                $usua = $sql->execute();
            }
            
        } catch (Exception $exc) {
            $usua = -1;
            echo $exc->getTraceAsString();
        }
        $conn->desconectar();
        return $usua;
    }
    
}


