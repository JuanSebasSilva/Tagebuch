<?php
class Mclb{
    private $idclb;
    private $idins;
    private $nomclb;
    private $idubi;
    private $anoforclb;
    private $cstmenusu;
    private $preclb;

    public function getIdclb(){
        return $this->idclb;
    }
    public function getIdins(){
        return $this->idins;
    }
    public function getNomclb(){
        return $this->nomclb;
    }
    public function getIdubi(){
        return $this->idubi;
    }
    public function getAnoforclb(){
        return $this->anoforclb;
    }
    public function getCstmenusu(){
        return $this->cstmenusu;
    }
    public function getPreclb(){
        return $this->preclb;
    }
    
    public function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    public function setIdins($idins){
        $this->idins = $idins;
    }
    public function setNomclb($nomclb){
        $this->nomclb = $nomclb;
    }
    public function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    public function setAnoforclb($anoforclb){
        $this->anoforclb = $anoforclb;
    }
    public function setCstmenusu($cstmenusu){
        $this->cstmenusu = $cstmenusu;
    }
    public function setPreclb($preclb){
        $this->preclb = $preclb;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM club";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT * FROM club WHERE idclub=:idclub";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclub", $idclub);
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
}
?>