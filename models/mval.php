<?php
class Mval{
    private $idval;
    private $nomval;
    private $iddom;
    private $parval;
    private $actval;

    function getIdval(){
        return $this->idval;
    }
    function getNomval(){
        return $this->nomval;
    }
    function getIddom(){
        return $this->iddom;
    }
    function getParval(){
        return $this->parval;
    }
    function getActval(){
        return $this->actval;
    }

    function setIdval($idval){
        $this->idval = $idval;
    }
    function setNomval($nomval){
        $this->nomval = $nomval;
    }
    function setIddom($iddom){
        $this->iddom = $iddom;
    }
    function setParval($parval){
        $this->parval = $parval;
    }
    function setActval($actval){
        $this->actval = $actval;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM valor";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM valor WHERE idval=:idval";
        $result = $conexion->prepare($sql);
        $idval = $this->getIdval();
        $result->bindParam(":idval", $idval);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO valor(nomval, iddom, parval, actval) VALUES(:nomval, :iddom, :parval, :actval)";
        $result = $conexion->prepare($sql);
        $nomval = $this->getNomval();
        $result->bindParam(":nomval", $nomval);
        $iddom = $this->getIddom();
        $result->bindParam(":iddom", $iddom);
        $parval = $this->getParval();
        $result->bindParam(":parval", $parval);
        $actval = $this->getActval();
        $result->bindParam(":actval", $actval);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE valor SET nomval=:nomval, iddom=:iddom, parval=:parval, actval=:actval WHERE idval=:idval";
        $result = $conexion->prepare($sql);
        $idval = $this->getIdval();
        $result->bindParam(":idval", $idval);
        $nomval = $this->getNomval();
        $result->bindParam(":nomval", $nomval);
        $iddom = $this->getIddom();
        $result->bindParam(":iddom", $iddom);
        $parval = $this->getParval();
        $result->bindParam(":parval", $parval);
        $actval = $this->getActval();
        $result->bindParam(":actval", $actval);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM valor WHERE idval=:idval";
        $result = $conexion->prepare($sql);
        $idval = $this->getIdval();
        $result->bindParam(":idval", $idval);
        $result->execute();
    }
}
?>