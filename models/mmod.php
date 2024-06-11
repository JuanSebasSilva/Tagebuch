<?php
class Mmod{
    private $idmod;
    private $nommod;
    private $imgmod;
    private $actmod;
    private $idper;
    private $idusu;

    function getIdmod(){
        return $this->idmod;
    }
    function getNommod(){
        return $this->nommoda;
    }
    function getImgmod(){
        return $this->imgmod;
    }
    function getActmod(){
        return $this->actmod;
    }
    function getIdper(){
        return $this->idper;
    }
    function getIdusu(){
        return $this->idusu;
    }

    function setIdmod($idmod){
        $this->idmod = $idmod;
    }
    function setNommod($nommod){
        $this->nommod = $nommod;
    }
    function setImgmod($imgmod){
        $this->imgmod = $imgmod;
    }
    function setActmod($actmod){
        $this->actmod = $actmod;
    }
    function setIdper($idper){
        $this->idper = $idper;
    }
    function setIdusu($idusu){
        $this->idusu = $idusu;
    }
}
?>