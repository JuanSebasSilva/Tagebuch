<?php
class Mins{
    private $idins;
    private $idusu;
    private $idpla;
    private $fhins;
    private $etdins;
    private $idclb;

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
    function getIdclb(){
        return $this->idclb;
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
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT ins.idins, ins.fhins, ins.etdins, us.idusu, us.idper, us.nomusu, us.empusu, us.emausu, us.nitusu, us.fotusu, us.expusu, us.hisusu, us.salusu, us.tponit, 
        us.genusu, us.fhnusu, us.idubi, pl.idpla, cl.idclb, cl.nomclb FROM inscripcion AS ins INNER JOIN usuario AS us ON ins.idusu=us.idusu INNER JOIN plantilla AS pl 
        ON ins.idpla=pl.idpla INNER JOIN club AS cl ON ins.idclb=cl.idclb";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT ins.idins, ins.fhins, ins.etdins, us.idusu, us.idper, us.nomusu, us.empusu, us.emausu, us.nitusu, us.fotusu, us.expusu, us.hisusu, us.salusu, us.tponit, 
        us.genusu, us.fhnusu, us.idubi, pl.idpla, cl.idclb, cl.nomclb FROM inscripcion AS ins INNER JOIN usuario AS us ON ins.idusu=us.idusu INNER JOIN plantilla AS pl 
        ON ins.idpla=pl.idpla INNER JOIN club AS cl ON ins.idclb=cl.idclb WHERE ins.idins=:idins";
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
        $sql = "INSERT INTO inscripcion(idusu, idpla, fhins, etdins, idclb) VALUES(:idusu, :idpla, :fhins, :etdins, :idclb)";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idpla = $this->getIdpla();
        $result->bindParam(":idpla", $idpla);
        $fhins = $this->getFhins();
        $result->bindParam(":fhins", $fhins);
        $etdins = $this->getEtdins();
        $result->bindParam(":etdins", $etdins);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE inscripcion SET idusu=:idusu,, idpla=:idpla,, fhins=:fhins,, etdins=:etdins, idclb=:idclb WHERE idins=:idins";
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
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
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

    public function getTipoi(){
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