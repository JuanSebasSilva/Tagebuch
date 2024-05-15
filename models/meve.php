<?php
class Meve{
    private $ideve;
    private $idubi;
    private $nomeve;
    private $deseve;
    private $tpoeve;
    private $dureve;
    private $etdeve;
    private $reseve;
    private $fheve;

    public function getIdeve(){
        return $this->ideve;
    }
    public function getIdubi(){
        return $this->idubi;
    }
    public function getNomeve(){
        return $this->nomeve;
    }
    public function getDeseve(){
        return $this->deseve;
    }
    public function getTpoeve(){
        return $this->tpoeve;
    }
    public function getDureve(){
        return $this->dureve;
    }
    public function getEtdeve(){
        return $this->etdeve;
    }
    public function getReseve(){
        return $this->reseve;
    }
    public function getFheve(){
        return $this->fheve;
    }

    public function setIdeve($ideve){
        $this->ideve = $ideve;
    }
    public function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    public function setNomeve($nomeve){
        $this->nomeve = $nomeve;
    }
    public function setDeseve($deseve){
        $this->deseve = $deseve;
    }
    public function setTpoeve($tpoeve){
        $this->tpoeve = $tpoeve;
    }
    public function setDureve($dureve){
        $this->dureve = $dureve;
    }
    public function setEtdeve($etdeve){
        $this->etdeve = $etdeve;
    }
    public function setReseve($reseve){
        $this->reseve = $reseve;
    }
    public function setFheve($fheve){
        $this->fheve = $fheve;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT ev.ideve, ev.nomeve, ev.deseve, ev.tpoeve, ev.dureve, ev.etdeve, ev.reseve, ev.fheve, ub.idubi, ub.nomubi, ub.depubi, v.idval, v.nomval 
                FROM evento AS ev INNER JOIN ubicacion AS ub ON ev.idubi=ub.idubi INNER JOIN valor AS v ON ev.tpoeve=v.idval";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT ev.ideve, ev.nomeve, ev.deseve, ev.tpoeve, ev.dureve, ev.etdeve, ev.reseve, ev.fheve, ub.idubi, ub.nomubi, ub.depubi, v.idval, v.nomval 
                FROM evento AS ev INNER JOIN ubicacion AS ub ON ev.idubi=ub.idubi INNER JOIN valor AS v ON ev.tpoeve=v.idval WHERE ev.ideve=:ideve";
        $result = $conexion->prepare($sql);
        $ideve = $this->getIdeve();
        $result->bindParam(":ideve", $ideve);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT JOIN evento(idubi, nomeve, deseve, tpoeve, dureve, etdeve, reseve, fheve) VALUES(:idubi, :nomeve, :deseve, :tpoeve, :dureve, :etdeve, :reseve, :fheve)";
        $result = $conexion->prepare($sql);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $nomeve = $this->getNomeve();
        $result->bindParam(":nomeve", $nomeve);
        $deseve = $this->getDeseve();
        $result->bindParam(":deseve", $deseve);
        $tpoeve = $this->getTpoeve();
        $result->bindParam(":tpoeve", $tpoeve);
        $dureve = $this->getDureve();
        $result->bindParam(":dureve", $dureve);
        $etdeve = $this->getEtdeve();
        $result->bindParam(":etdeve", $etdeve);
        $reseve = $this->getReseve();
        $result->bindParam(":reseve", $reseve);
        $fheve = $this->getFheve();
        $result->bindParam(":fheve", $fheve);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE evento SET idubi=:idubi nomeve=:nomeve, deseve=:deseve, tpoeve=:tpoeve, dureve=:dureve, etdeve=:etdeve, reseve=:reseve, fheve=:fheve WHERE ideve=:ideve";
        $result = $conexion->prepare($sql);
        $ideve = $this->getIdeve();
        $result->bindParam(":ideve", $ideve);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi)
        $nomeve = $this->getNomeve();
        $result->bindParam(":nomeve", $nomeve);
        $deseve = $this->getDeseve();
        $result->bindParam(":deseve", $deseve);
        $tpoeve = $this->getTpoeve();
        $result->bindParam(":tpoeve", $tpoeve);
        $dureve = $this->getDureve();
        $result->bindParam(":dureve", $dureve);
        $etdeve = $this->getEtdeve();
        $result->bindParam(":etdeve", $etdeve);
        $reseve = $this->getReseve();
        $result->bindParam(":reseve", $reseve);
        $fheve = $this->getFheve();
        $result->bindParam(":fheve", $fheve);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM evento WHERE ideve=:ideve";
        $result = $conexion->prepare($sql);
        $ideve = $this->getIdeve();
        $result->bindParam(":ideve", $ideve);
        $result->execute();
    }
}
?>