<?php
class Mdom{
    private $iddom;
    private $nomdom;

    function getiddom(){
        return $this->iddom;
    }
    function getnomdom(){
        return $this->nomdom;
    }

    function setiddom(){
        $this->iddom = $iddom;
    }
    function setnomdom(){
        $this->nomdom = $nomdom;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT iddom, nomdom FROM dominio";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT iddom, nomdom FROM dominio WHERE iddom=:iddom";
        $result = $conexion->prepare($sql);
        $iddom = $this->getIddom();
        $result->bindParam(":iddom", $iddom);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO dominio(nomdom) values (:nomdom)";
        $result = $conexion->prepare($sql);
        $nomdom = $this->getNomdom();
        $result->bindParam(":nomdom",$nomdom);
        $result->execute();
    }

    public function edit(){
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE dominio SET nomdom=:nomdom WHERE iddom=:iddom";
        $result = $conexion->prepare($sql);
        $nomdom = $this->getNomdom();
        $result->bindParam(":nomdom",$nomdom);
        $result->execute();
    }

    public function del(){
        $modelo = new conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM dominio WHERE iddom=:iddom";
        $result = $conexion->prepare($sql);
        $iddom = $this->getIddom();
        $result->bindParam(":iddom",$iddom);
        $result->execute();
    }
}
?>