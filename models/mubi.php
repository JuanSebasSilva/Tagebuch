<?php
class Mubi{
    private $idubi;
    private $nomubi;
    private $depubi;

    function getIdubi(){
        return $this->idubi;
    }
    function getNomubi(){
        return $this->nomubi;
    }
    function getDepubi(){
        return $this->depubi;
    }

    function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    function setNomubi($nomubi){
        $this->nomubi = $nomubi;
    }
    function setDepubi($depubi){
        $this->depubi = $depubi;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT dp.idubi AS cdp, dp.nomubi AS ndp, mu.idubi AS cmu, mu.nomubi AS nmu FROM ubicacion as mu LEFT JOIN ubicacion AS dp ON mu.depubi=dp.idubi";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM ubicacion WHERE idubi=:idubi";
        $result = $conexion->prepare($sql);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT JOIN ubicacion(nomubi, depubi) VALUES(:nomubi, :depubi)";
        $result = $conexion->prepare($sql);
        $nomubi = $this->getNomubi();
        $result->bindParam(":nomubi", $nomubi);
        $depubi = $this->getDepubi();
        $result->bindParam(":depubi", $depubi);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE ubicacion SET nomubi=:nomubi, depubi=:depubi WHERE idubi=:idubi";
        $result = $conexion->prepare($sql);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $nomubi = $this->getNomubi();
        $result->bindParam(":nomubi", $nomubi);
        $depubi = $this->getDepubi();
        $result->bindParam(":depubi", $depubi);
        $result->execute();
    }

    public function del(){
        $$modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM ubicacion WHERE idubi=:idubi";
        $result = $conexion->prepare($sql);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $result->execute();
    }

    public function getDepubi($depubi){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM ubicacion WHERE depubi=:depubi ORDER BY nomubi";
        $result = $conexion->prepare($sql);
        $result->bindParam(":depubi", $depubi);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>