<?php


class Usuario {

    private $Iden_usua;
    private $Nomb_usua;
    private $Apel_usua;
    private $Tele_usua;
    private $Emai_usua;
    private $Pass_usua;
    private $Foto_usua;
    private $Push_usua;
    
    function getIden_usua() {
        return $this->Iden_usua;
    }

    function getNomb_usua() {
        return $this->Nomb_usua;
    }

    function getApel_usua() {
        return $this->Apel_usua;
    }

    function getTele_usua() {
        return $this->Tele_usua;
    }

    function getEmai_usua() {
        return $this->Emai_usua;
    }

    function getPass_usua() {
        return $this->Pass_usua;
    }

    function getFoto_usua() {
        return $this->Foto_usua;
    }

    function getPush_usua() {
        return $this->Push_usua;
    }

    function setIden_usua($Iden_usua) {
        $this->Iden_usua = $Iden_usua;
    }

    function setNomb_usua($Nomb_usua) {
        $this->Nomb_usua = $Nomb_usua;
    }

    function setApel_usua($Apel_usua) {
        $this->Apel_usua = $Apel_usua;
    }

    function setTele_usua($Tele_usua) {
        $this->Tele_usua = $Tele_usua;
    }

    function setEmai_usua($Emai_usua) {
        $this->Emai_usua = $Emai_usua;
    }

    function setPass_usua($Pass_usua) {
        $this->Pass_usua = $Pass_usua;
    }

    function setFoto_usua($Foto_usua) {
        $this->Foto_usua = $Foto_usua;
    }

    function setPush_usua($Push_usua) {
        $this->Push_usua = $Push_usua;
    }

    public function mapear($usuario){
        $this->Nomb_usua = $usuario['nomb_usua'];
        $this->Apel_usua = $usuario['apel_usua'];
        $this->Tele_usua = $usuario['tele_usua'];
        $this->Foto_usua = $usuario['foto_usua'];
    }
    
}
