<?php
class Mntcm{
    private $idntcm;
    private $idclb;
    private $fhpubntcm;
    private $autntcm;
    private $etdntcm;
    private $printcm;
    private $tpontcm;

    function getIdntcm(){
        return $this->idntcm;
    }
    function getIdclb(){
        return $this->idclb;
    }
    function getFhpubntcm(){
        return $this->fhpubntcm;
    }
    function getAutntcm(){
        return $this->autntcm;
    }
    function getEtdntcm(){
        return $this->etdntcm;
    }
    function getPrintcm(){
        return $this->printcm;
    }
    function getTpontcm(){
        return $this->tpontcm;
    }

    function setIdntcm($idntcm){
        $this->idntcm = $idntcm;
    }
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setFhpubntcm($fhpubntcm){
        $this->fhpubntcm = $fhpubntcm;
    }
    function setAutntcm($autntcm){
        $this->autntcm = $autntcm;
    }
    function setEtdntcm($etdntcm){
        $this->etdntcm = $etdntcm;
    }
    function setPrintcm($printcm){
        $this->printcm = $printcm;
    }
    function setTpontcm($tpontcm){
        $this->tpontcm = $tpontcm;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT nc.idntcm, nc.fhpubntcm, nc.autntcm, nc.etdntcm, nc.printcm, nc.tpontcm, cl.idclb, cl.nomclb, cl.idubi, etv.idval AS etviv, etv.nomval AS etvnv, prv.idval AS prviv, prv.nomval AS prvnv, tpv.idval AS tpviv, tpv.nomval AS tpvnv 
        FROM notcom AS nc INNER JOIN club AS cl ON nc.idclb=cl.idclb INNER JOIN valor AS etv ON nc.etdntcm=etv.idval INNER JOIN valor AS prv ON nc.printcm=prv.idval INNER JOIN valor AS tpv ON nc.tpontcm=tpv.idval";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH::ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT nc.idntcm, nc.fhpubntcm, nc.autntcm, nc.etdntcm, nc.printcm, nc.tpontcm, cl.idclb, cl.nomclb, cl.idubi, etv.idval AS etviv, etv.nomval AS etvnv, prv.idval AS prviv, prv.nomval AS prvnv, tpv.idval AS tpviv, tpv.nomval AS tpvnv 
        FROM notcom AS nc INNER JOIN club AS cl ON nc.idclb=cl.idclb INNER JOIN valor AS etv ON nc.etdntcm=etv.idval INNER JOIN valor AS prv ON nc.printcm=prv.idval INNER JOIN valor AS tpv ON nc.tpontcm=tpv.idval WHERE nc.idntcm=:idntcm";
        $result = $conexion->prepare($sql);
        $idntcm = $this->getIdntcm();
        $result->bindParam(":idntcm", $idntcm);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO notcom(idclb, fhpubntcm, autntcm, etdntcm, printcm, tpontcm) VALUES(:idclb, :fhpubntcm, :autntcm, :etdntcm, :printcm, :tpontcm)";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $fhpubntcm = $this->getFhpubntcm();
        $result->bindParam(":fhpubntcm", $fhpubntcm);
        $autntcm = $this->getAutntcm();
        $result->bindParam(":autntcm", $autntcm);
        $etdntcm = $this->getEtdntcm();
        $result->bindParam(":etdntcm", $etdntcm);
        $printcm = $this->getPrintcm();
        $result->bindParam(":printcm", $printcm);
        $tpontcm = $this->getTpontcm();
        $result->bindParam(":tpontcm", $tpontcm);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE notcom SET idclb=:idclb, fhpubntcm=:fhpubntcm, autntcm=:autntcm, etdntcm=:etdntcm, printcm=:printcm, tpontcm=:tpontcm WHERE idntcm=:idntcm";
        $result = $conexion->prepare($sql);
        $idntcm = $this->getIdntcm();
        $result->bindParam(":idntcm", $idntcm);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $fhpubntcm = $this->getFhpubntcm();
        $result->bindParam(":fhpubntcm", $fhpubntcm);
        $autntcm = $this->getAutntcm();
        $result->bindParam(":autntcm", $autntcm);
        $etdntcm = $this->getEtdntcm();
        $result->bindParam(":etdntcm", $etdntcm);
        $printcm = $this->getPrintcm();
        $result->bindParam(":printcm", $printcm);
        $tpontcm = $this->getTpontcm();
        $result->bindParam(":tpontcm", $tpontcm);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM notcom WHERE idntcm=:idntcm";
        $result = $conexion->prepare($sql);
        $idntcm = $this->getIdntcm();
        $result->bindParam(":idntcm", $idntcm);
        $result->execute();
    }

    public function getEstnc(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=#";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getPrinc(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=#";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getTiponc(){
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