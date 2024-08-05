<?php
class Mntcm{
    private $idnc;
    private $idclb;
    private $nomnc;
    private $desnc;
    private $fhpnc;
    private $autnc;
    private $etdnc;
    private $princ;
    private $tponc;

    function getIdnc(){
        return $this->idnc;
    }
    function getIdclb(){
        return $this->idclb;
    }
    function getNomnc(){
        return $this->nomnc;
    }
    function getDesnc(){
        return $this->desnc;
    }
    function getFhpnc(){
        return $this->fhpnc;
    }
    function getAutnc(){
        return $this->autnc;
    }
    function getEtdnc(){
        return $this->etdnc;
    }
    function getPrinc(){
        return $this->princ;
    }
    function getTponc(){
        return $this->tponc;
    }

    function setIdnc($idnc){
        $this->idnc = $idnc;
    }
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setNomnc($nomnc){
        $this->nomnc = $nomnc;
    }
    function setDesnc($desnc){
        $this->desnc = $desnc;
    }
    function setFhpnc($fhpnc){
        $this->fhpnc = $fhpnc;
    }
    function setAutnc($autnc){
        $this->autnc = $autnc;
    }
    function setEtdnc($etdnc){
        $this->etdnc = $etdnc;
    }
    function setPrinc($princ){
        $this->princ = $princ;
    }
    function setTponc($tponc){
        $this->tponc = $tponc;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT nc.idnc, nc.nomnc, nc.desnc, nc.fhpnc, nc.autnc, nc.etdnc, nc.princ, nc.tponc, cl.idclb, cl.nomclb, cl.idubi, etv.idval AS etviv, etv.nomval AS etvnv, prv.idval AS prviv, prv.nomval AS prvnv, tpv.idval AS tpviv, tpv.nomval AS tpvnv 
        FROM notcom AS nc INNER JOIN club AS cl ON nc.idclb=cl.idclb INNER JOIN valor AS etv ON nc.etdnc=etv.idval INNER JOIN valor AS prv ON nc.princ=prv.idval INNER JOIN valor AS tpv ON nc.tponc=tpv.idval";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH::ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT nc.idnc, nc.nomnc, nc.desnc, nc.fhpnc, nc.autnc, nc.etdnc, nc.princ, nc.tponc, cl.idclb, cl.nomclb, cl.idubi, etv.idval AS etviv, etv.nomval AS etvnv, prv.idval AS prviv, prv.nomval AS prvnv, tpv.idval AS tpviv, tpv.nomval AS tpvnv 
        FROM notcom AS nc INNER JOIN club AS cl ON nc.idclb=cl.idclb INNER JOIN valor AS etv ON nc.etdnc=etv.idval INNER JOIN valor AS prv ON nc.princ=prv.idval INNER JOIN valor AS tpv ON nc.tponc=tpv.idval WHERE nc.idnc=:idnc";
        $result = $conexion->prepare($sql);
        $idnc = $this->getIdnc();
        $result->bindParam(":idnc", $idnc);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO notcom(idclb, nomnc, desnc, fhpnc, autnc, etdnc, princ, tponc) VALUES(:idclb, :nomnc, :desnc, :fhpnc, :autnc, :etdnc, :princ, :tponc)";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $nomnc = $this->getNomnc();
        $result->bindParam(':nomnc', $nomnc);
        $desnc = $this->getDesnc();
        $result->bindParam(':desnc', $desnc);
        $fhpnc = $this->getFhpnc();
        $result->bindParam(":fhpnc", $fhpnc);
        $autnc = $this->getAutnc();
        $result->bindParam(":autnc", $autnc);
        $etdnc = $this->getEtdnc();
        $result->bindParam(":etdnc", $etdnc);
        $princ = $this->getPrinc();
        $result->bindParam(":princ", $princ);
        $tponc = $this->getTponc();
        $result->bindParam(":tponc", $tponc);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE notcom SET idclb=:idclb, nomnc=:nomnc, desnc=:desnc, fhpnc=:fhpnc, autnc=:autnc, etdnc=:etdnc, princ=:princ, tponc=:tponc WHERE idnc=:idnc";
        $result = $conexion->prepare($sql);
        $idnc = $this->getIdnc();
        $result->bindParam(":idnc", $idnc);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $nomnc = $this->getNomnc();
        $result->bindParam(':nomnc', $nomnc);
        $desnc = $this->getDesnc();
        $result->bindParam(':desnc', $desnc);
        $fhpnc = $this->getFhpnc();
        $result->bindParam(":fhpnc", $fhpnc);
        $autnc = $this->getAutnc();
        $result->bindParam(":autnc", $autnc);
        $etdnc = $this->getEtdnc();
        $result->bindParam(":etdnc", $etdnc);
        $princ = $this->getPrinc();
        $result->bindParam(":princ", $princ);
        $tponc = $this->getTponc();
        $result->bindParam(":tponc", $tponc);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM notcom WHERE idnc=:idnc";
        $result = $conexion->prepare($sql);
        $idnc = $this->getIdnc();
        $result->bindParam(":idnc", $idnc);
        $result->execute();
    }

    public function getEstnc(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=8";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getPrinc(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom AND (3, 4)";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getTiponc(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=7";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>