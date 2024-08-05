<?php
class Meve{
    private $ideve;
    private $idubi;
    private $nomeve;
    private $deseve;
    private $tpoeve;
    private $etdeve;
    private $reseve;
    private $fieve;
    private $ffeve;

    function getIdeve(){
        return $this->ideve;
    }
    function getIdubi(){
        return $this->idubi;
    }
    function getNomeve(){
        return $this->nomeve;
    }
    function getDeseve(){
        return $this->deseve;
    }
    function getTpoeve(){
        return $this->tpoeve;
    }
    function getEtdeve(){
        return $this->etdeve;
    }
    function getReseve(){
        return $this->reseve;
    }
    function getFieve(){
        return $this->fieve;
    }
    function getFfeve(){
        return $this->ffeve;
    }

    function setIdeve($ideve){
        $this->ideve = $ideve;
    }
    function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    function setNomeve($nomeve){
        $this->nomeve = $nomeve;
    }
    function setDeseve($deseve){
        $this->deseve = $deseve;
    }
    function setTpoeve($tpoeve){
        $this->tpoeve = $tpoeve;
    }
    function setEtdeve($etdeve){
        $this->etdeve = $etdeve;
    }
    function setReseve($reseve){
        $this->reseve = $reseve;
    }
    function setFieve($fieve){
        $this->fieve = $fieve;
    }
    function setFfeve($ffeve){
        $this->ffeve = $ffeve;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT ev.ideve, ev.nomeve, ev.deseve, ev.tpoeve, ev.etdeve, ev.reseve, ev.fieve, ev.ffeve, ub.idubi, ub.nomubi, ub.depubi, v.idval, v.nomval 
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
        $sql = "SELECT ev.ideve, ev.nomeve, ev.deseve, ev.tpoeve, ev.etdeve, ev.reseve, ev.fieve, ev.ffeve, ub.idubi, ub.nomubi, ub.depubi, v.idval, v.nomval 
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
        $sql = "INSERT JOIN evento(idubi, nomeve, deseve, tpoeve, etdeve, reseve, fieve, ffeve) VALUES(:idubi, :nomeve, :deseve, :tpoeve, :etdeve, :reseve, :fieve, :ffeve)";
        $result = $conexion->prepare($sql);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $nomeve = $this->getNomeve();
        $result->bindParam(":nomeve", $nomeve);
        $deseve = $this->getDeseve();
        $result->bindParam(":deseve", $deseve);
        $tpoeve = $this->getTpoeve();
        $result->bindParam(":tpoeve", $tpoeve);
        $etdeve = $this->getEtdeve();
        $result->bindParam(":etdeve", $etdeve);
        $reseve = $this->getReseve();
        $result->bindParam(":reseve", $reseve);
        $fieve = $this->getFieve();
        $result->bindParam(":fieve", $fieve);
        $ffeve = $this->getFfeve();
        $result->bindParam(":ffeve", $ffeve);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE evento SET idubi=:idubi nomeve=:nomeve, deseve=:deseve, tpoeve=:tpoeve, etdeve=:etdeve, reseve=:reseve, fieve=:fieve, ffeve=:ffeve WHERE ideve=:ideve";
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
        $etdeve = $this->getEtdeve();
        $result->bindParam(":etdeve", $etdeve);
        $reseve = $this->getReseve();
        $result->bindParam(":reseve", $reseve);
        $fieve = $this->getfieve();
        $result->bindParam(":fieve", $fieve);
        $ffeve = $this->getFfeve();
        $result->bindParam(":ffeve", $ffeve);
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

    public function getTipoe(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=9";
        $result = $conexion->prepare($sql);
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>