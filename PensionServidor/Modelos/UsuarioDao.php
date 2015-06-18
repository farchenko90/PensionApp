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
                    $user = new Usuario();
                    $user->mapear($row);
                    $user[] = array(
                        "nomb_usua" => $user->getNomb_usua(),
                        "apel_usua" => $user->getApel_usua(),
                        "foto_usua" => $user->getFoto_usua(),
                        "tele_usua" => $user->getTele_usua()
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
    
}
