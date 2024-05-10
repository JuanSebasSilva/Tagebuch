<?php
class Mins{
    private $idins;
    private $idusu;
    private $idpla;
    private $fhins;
    private $etdins;
    private $durins;

    function getIdins(){
        return $this->idins;
    }
    function getIdusu(){
        return $this->idusu;
    }
    function getIdpla(){
        return $this->idpla;
    }
    function getFhins(){
        return $this->fhins;
    }
    function getEtdins(){
        return $this->etdins;
    }
    function getDurins(){
        return $this->durins;
    }

    function setIdins($idins){
        $this->idins = $idins;
    }
    function setIdusu($idusu){
        $this->idusu = $idusu;
    }
    function setIdpla($idpla){
        $this->idpla = $idpla;
    }
    function setFhins($fhins){
        $this->fhins = $fhins;
    }
    function setEtdins($etdins){
        $this->etdins = $etdins;
    }
    function setDurins($durins){
        $this->durins = $durins;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM inscripcion";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM inscripcion WHERE idins=:idins";
        $result = $conexion->prepare($sql);
        $idins = $this->getIdins();
        $result->bindParam(":idins", $idins);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO inscripcion(idusu, idpla, fhins, etdins, durins) VALUES(:idusu, :idpla, :fhins, :etdins, :durins)";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idpla = $this->getIdpla();
        $result->bindParam(":idpla", $idpla);
        $fhins = $this->getFhins();
        $result->bindParam(":fhins", $fhins);
        $etdins = $this->getEtdins();
        $result->bindParam(":etdins", $etdins);
        $durins = $this->getDurins();
        $result->bindParam(":durins", $durins);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE inscripcion SET idusu=:idusu,, idpla=:idpla,, fhins=:fhins,, etdins=:etdins, durins=:durins WHERE idins=:idins";
        $result = $conexion->prepare($sql);
        $idins =  $this->getIdins();
        $result->bindParam(":idins", $idins);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idpla = $this->getIdpla();
        $result->bindParam(":idpla", $idpla);
        $fhins = $this->getFhins();
        $result->bindParam(":fhins", $fhins);
        $etdins = $this->getEtdins();
        $result->bindParam(":etdins", $etdins);
        $durins = $this->getDurins();
        $result->bindParam(":durins", $durins);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM inscripcion WHERE idins=:idins";
        $result = $conexion->prepare($sql);
        $idins = $this->getIdins();
        $result->bindParam("idins", $idins);
        $result->execute();
    }
}
?>