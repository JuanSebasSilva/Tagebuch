<?php
class Mclb{
    private $idclb;
    private $idins;
    private $nomclb;
    private $idubi;
    private $anoforclb;
    private $cstmenusu;
    private $preclb;

    function getIdclb(){
        return $this->idclb;
    }
    function getIdins(){
        return $this->idins;
    }
    function getNomclb(){
        return $this->nomclb;
    }
    function getIdubi(){
        return $this->idubi;
    }
    function getAnoforclb(){
        return $this->anoforclb;
    }
    function getCstmenusu(){
        return $this->cstmenusu;
    }
    function getPreclb(){
        return $this->preclb;
    }
    
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setIdins($idins){
        $this->idins = $idins;
    }
    function setNomclb($nomclb){
        $this->nomclb = $nomclb;
    }
    function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    function setAnoforclb($anoforclb){
        $this->anoforclb = $anoforclb;
    }
    function setCstmenusu($cstmenusu){
        $this->cstmenusu = $cstmenusu;
    }
    function setPreclb($preclb){
        $this->preclb = $preclb;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT cl.idclb, cl.nomclb, cl.anoforclb, cl.cstmenusu, cl.preclb, ins.idins, ins.idusu, ins.idpla, ins.fhins, ins.etdins, ins.durins, ub.idubi, ub.nomubi, ub.depubi 
        FROM club AS cl INNER JOIN inscripcion AS ins ON cl.idins=ins.idins INNER JOIN ubicacion AS ub ON cl.idubi=ub.idubi";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT cl.idclb, cl.nomclb, cl.anoforclb, cl.cstmenusu, cl.preclb, ins.idins, ins.idusu, ins.idpla, ins.fhins, ins.etdins, ins.durins, ub.idubi, ub.nomubi, ub.depubi 
        FROM club AS cl INNER JOIN inscripcion AS ins ON cl.idins=ins.idins INNER JOIN ubicacion AS ub ON cl.idubi=ub.idubi WHERE cl.idclb=:idclb";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO club(idins, nomclb, idubi, anoforclb, cstmenusu, preclb) VALUES (:idins, :nomclb, :idubi, :anoforclb, :cstmenusu, :preclb)"
        $result = $conexion->prepare($sql);
        $idins = $this->getIdins();
        $result->bindParam(":idins", $idins);
        $nomclb = $this->getNomclb();
        $result->bindParam(":nomclb", $nomclb);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $anoforclb = $this->getAnoforclb();
        $result->bindParam(":anoforclb", $anoforclb);
        $cstmenusu = $this->getCstmenusu();
        $result->bindParam(":cstmenusu", $cstmenusu);
        $preclb = $this->getPreclb();
        $result->bindParam(":preclb", $preclb);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE club SET idins=:idins, nomclb=:nomclb, idubi=:idubi, anoforclb=:anoforclb, cstmenusu=:cstmenusu, preclb=:preclb WHERE idclb=:idclb";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $idins = $this->getIdins();
        $result->bindParam(":idins", $idins);
        $nomclb = $this->getNomclb();
        $result->bindParam(":nomclb", $nomclb);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $anoforclb = $this->getAnoforclb();
        $result->bindParam(":anoforclb", $anoforclb);
        $cstmenusu = $this->getCstmenusu();
        $result->bindParam(":cstmenusu", $cstmenusu);
        $preclb = $this->getPreclb();
        $result->bindParam(":preclb", $preclb);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM club WHERE idclb=:idclb";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $result->execute();
    }

    /* public function getUbi(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idubi, nomubi, depubi FROM ubicacion";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    } */
}
?>