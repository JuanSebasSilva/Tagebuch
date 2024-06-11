<?php
class Mtra{
    private $idtrs;
    private $idusu;
    private $idclb;
    private $fictrtrs;
    private $valtrs;
    private $bontrs;
    private $dettrs;
    private $etdtrs;
    private $firclbtrs;
    private $firusutrs;

    function getIdtrs(){
        return $this->idtrs;
    }
    function getIdusu(){
        return $this->idusu;
    }
    function getIdclb(){
        return $this->idclb;
    }
    function getFictrtrs(){
        return $this->fictrtrs;
    }
    function getValtrs(){
        return $this->valtrs;
    }
    function getBontrs(){
        return $this->bontrs;
    }
    function getDettrs(){
        return $this->dettrs;
    }
    function getEtdtrs(){
        return $this->etdtrs;
    }
    function getFirclbtrs(){
        return $this->firclbtrs;
    }
    function getFirusutrs(){
        return $this->firusutrs;
    }

    function setIdtrs($idtrs){
        $this->idtrs = $idtrs;
    }
    function setIdusu($idusu){
        $this->idusu = $idusu;
    }
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setFictrtrs($fictrtrs){
        $this->fictrtrs = $fictrtrs;
    }
    function setValtrs($valtrs){
        $this->valtrs = $valtrs;
    }
    function setBontrs($bontrs){
        $this->bontrs = $bontrs;
    }
    function setDettrs($dettrs){
        $this->dettrs = $dettrs;
    }
    function setEtdtrs($etdtrs){
        $this->etdtrs = $etdtrs;
    }
    function setFirclbtrs($firclbtrs){
        $this->firclbtrs = $firclbtrs;
    }
    function setFirusutrs($firusutrs){
        $this->firusutrs = $firusutrs;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT tr.idtrs, tr.fictrtrs, tr.valtrs, tr.bontrs, tr.dettrs, tr.etdtrs, tr.firclbtrs, tr.firusutrs, us.idusu, us.idper, us.nomusu, us.empusu, us.nitusu, us.fotusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.idubi, us.emausu, 
        cl.idclb, cl.nomclb, cl.idubi, cl.preclb, etv.idval, etv.nomval FROM traspaso AS tr INNER JOIN usuario AS us ON tr.idusu=us.idusu INNER JOIN club AS cl ON tr.idclb=cl.idclb INNER JOIN valor AS etv ON tr.etdtrs=etv.idval";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT tr.idtrs, tr.fictrtrs, tr.valtrs, tr.bontrs, tr.dettrs, tr.etdtrs, tr.firclbtrs, tr.firusutrs, us.idusu, us.idper, us.nomusu, us.empusu, us.nitusu, us.fotusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.idubi, us.emausu, 
        cl.idclb, cl.nomclb, cl.idubi, cl.preclb, etv.idval, etv.nomval FROM traspaso AS tr INNER JOIN usuario AS us ON tr.idusu=us.idusu INNER JOIN club AS cl ON tr.idclb=cl.idclb INNER JOIN valor AS etv ON tr.etdtrs=etv.idval WHERE tr.idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO traspaso(idusu, idclb, fictrtrs, valtrs, bontrs, dettrs, etdtrs, firclbtrs, firusutrs) VALUES(:idusu, :idclb, :fictrtrs, :valtrs, :bontrs, :dettrs, :etdtrs, :firclbtrs, :firusutrs)";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $fictrtrs = $this->getFictrtrs();
        $result->bindParam(":fictrtrs", $fictrtrs);
        $valtrs = $this->getValtrs();
        $result->bindParam(":valtrs", $valtrs);
        $bontrs = $this->getBontrs();
        $result->bindParam(":bontrs", $bontrs);
        $dettrs = $this->getDettrs();
        $result->bindParam(":dettrs", $dettrs);
        $etdtrs = $this->getEtdtrs();
        $result->bindParam(":etdtrs", $etdtrs);
        $firclbtrs = $this->getFirclbtrs();
        $result->bindParam(":firclbtrs", $firclbtrs);
        $firusutrs = $this->getFirusutrs();
        $result->bindParam(":firusutrs", $firusutrs);
        $result->execute();
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE traspaso SET idusu=:idusu, idclb=:idclb, fictrtrs=:fictrtrs, valtrs=:valtrs, bontrs=:bontrs, dettrs=:dettrs, etdtrs=:etdtrs, firclbtrs=:firclbtrs, firusutrs=:firusutrs WHERE idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $fictrtrs = $this->getFictrtrs();
        $result->bindParam(":fictrtrs", $fictrtrs);
        $valtrs = $this->getValtrs();
        $result->bindParam(":valtrs", $valtrs);
        $bontrs = $this->getBontrs();
        $result->bindParam(":bontrs", $bontrs);
        $dettrs = $this->getDettrs();
        $result->bindParam(":dettrs", $dettrs);
        $etdtrs = $this->getEtdtrs();
        $result->bindParam(":etdtrs", $etdtrs);
        $firclbtrs = $this->getFirclbtrs();
        $result->bindParam(":firclbtrs", $firclbtrs);
        $firusutrs = $this->getFirusutrs();
        $result->bindParam(":firusutrs", $firusutrs);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM traspaso WHERE idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $result->execute();
    }

    public function getEstt(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=#";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>