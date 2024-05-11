<?php
class Mcon{
    private $idcon;
    private $nitcon;
    private $titcon;
    private $imgcon;
    private $descon;
    private $piecon;

    function getIdcon(){
        return $this->idcon;
    }
    function getNitcon(){
        return $this->nitcon;
    }
    function getTitcon(){
        return $this->titcon;
    }
    function getImgcon(){
        return $this->imgcon;
    }
    function getDescon(){
        return $this->descon;
    }
    function getPiecon(){
        return $this->piecon;
    }

    function setIdcon($idcon){
        $this->idcon = $idcon;
    }
    function setNitcon($nitcon){
        $this->nitcon = $nitcon;
    }
    function setTitcon($titcon){
        $this->titcon = $titcon;
    }
    function setImgcon($imgcon){
        $this->imgcon = $imgcon;
    }
    function setDescon($descon){
        $this->descon = $descon;
    }
    function setPiecon($piecon){
        $this->piecon = $piecon;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM configuracion";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM configuracion WHERE idcon=:idcon";
        $result = $conexion->prepare($sql);
        $idcon = $this->getIdcon();
        $result->bindParam(":idcon", $idcon);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO configuracion(nitcon, titcon, imgcon, descon, piecon) VALUES(:nitcon, :titcon, :imgcon, :descon, :piecon)";
        $result = $conexion->prepare($sql);
        $nitcon = $this->getNitcon();
        $result->bindParam(":nitcon", $nitcon);
        $titcon = $this->getTitcon();
        $result->bindParam(":titcon", $titcon);
        $imgcon = $this->getImgcon();
        $result->bindParam(":imgcon", $imgcon);
        $descon = $this->getDescon();
        $result->bindParam(":descon", $descon);
        $piecon = $this->getPiecon();
        $result->bindParam(":piecon", $piecon);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE configuracion SET nitcon=:nitcon, titcon=:titcon, imgcon=:imgcon, descon=:descon, piecon=:piecon WHERE idcon=:idcon";
        $result = $conexion->prepare($sql);
        $idcon = $this->getIdcon();
        $result->bindParam(":idcon", $idcon);
        $nitcon = $this->getNitcon();
        $result->bindParam(":nitcon", $nitcon);
        $titcon = $this->getTitcon();
        $result->bindParam(":titcon", $titcon);
        $imgcon = $this->getImgcon();
        $result->bindParam(":imgcon", $imgcon);
        $descon = $this->getDescon();
        $result->bindParam(":descon", $descon);
        $piecon = $this->getPiecon();
        $result->bindParam(":piecon", $piecon);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM configuracion WHERE idcon=:idcon";
        $result = $conexion->prepare($sql);
        $idcon = $this->getIdcon();
        $result->bindParam(":idcon", $idcon);
        $result->execute();
    }
}
?>