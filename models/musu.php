<?php
class Musu{
    private $idusu;
    private $idper;
    private $nomusu;
    private $apeusu;
    private $emausu;
    private $pasusu;
    private $docusu;
    private $fotusu;
    private $etdusu;
    private $hisusu;
    private $tpodoc;
    private $genusu;
    private $fhnusu;
    private $actusu;
    private $idubi;

    function getIdusu(){
        return $this->idusu;
    }
    function getIdper(){
        return $this->idper;
    }
    function getNomusu(){
        return $this->nomusu;
    }
    function getApeusu(){
        return $this->apeusu;
    }
    function getEmausu(){
        return $this->emausu;
    }
    function getPasusu(){
        return $this->pasusu;
    }
    function getDocusu(){
        return $this->docusu;
    }
    function getFotusu(){
        return $this->fotusu;
    }
    function getEtdusu(){
        return $this->etdusu;
    }
    function getHisusu(){
        return $this->hisusu;
    }
    function getTpodoc(){
        return $this->tpodoc;
    }
    function getGenusu(){
        return $this->genusu;
    }
    function getFhnusu(){
        return $this->fhnusu;
    }
    function getActusu(){
        return $this->actusu;
    }
    function getIdubi(){
        return $this->idubi;
    }

    function setIdusu($idusu){
        $this->idusu = $idusu;
    }
    function setIdper($idper){
        $this->idper = $idper;
    }
    function setNomusu($nomusu){
        $this->nomusu = $nomusu;
    }
    function setApeusu($apeusu){
        $this->apeusu = $apeusu;
    }
    function setEmausu($emausu){
        $this->emausu = $emausu;
    }
    function setPasusu($pasusu){
        $this->pasusu = $pasusu;
    }
    function setDocusu($docusu){
        $this->docusu = $docusu;
    }
    function setFotusu($fotusu){
        $this->fotusu = $fotusu;
    }
    function setEtdusu($etdusu){
        $this->etdusu = $etdusu;
    }
    function setHisusu($hisusu){
        $this->hisusu = $hisusu;
    }
    function setTpodoc($tpodoc){
        $this->tpodoc = $tpodoc;
    }
    function setGenusu($genusu){
        $this->genusu = $genusu;
    }
    function setFhnusu($fhnusu){
        $this->fhnusu = $fhnusu;
    }
    function setActusu($actusu){
        $this->actusu = $actusu;
    }
    function setIdubi($idubi){
        $this->idubi = $idubi;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT us.idusu, us.nomusu, us.apeusu, us.pasusu, us.docusu, us.fotusu, us.etdusu, us.hisusu, us.tpodoc, us.genusu, us.fhnusu, us.actusu, us.emausu, pf.idper, pf.nomper, pf.pagini, tpv.idval AS tpiv, tpv.nomval AS tpnv, gnv.idval AS gniv, gnv.nomval AS gnnv, ub.idubi, ub.nomubi, ub.depubi 
        FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper INNER JOIN valor AS tpv ON us.tpodoc=tpv.idval INNER JOIN valor AS gnv ON us.genusu=gnv.idval INNER JOIN ubicacion AS ub ON us.idubi=ub.idubi";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT us.idusu, us.nomusu, us.apeusu, us.pasusu, us.docusu, us.fotusu, us.etdusu, us.hisusu, us.tpodoc, us.genusu, us.fhnusu, us.actusu, us.emausu, pf.idper, pf.nomper, pf.pagini, tpv.idval AS tpiv, tpv.nomval AS tpnv, gnv.idval AS gniv, gnv.nomval AS gnnv, ub.idubi, ub.nomubi, ub.depubi 
        FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper INNER JOIN valor AS tpv ON us.tpodoc=tpv.idval INNER JOIN valor AS gnv ON us.genusu=gnv.idval INNER JOIN ubicacion AS ub ON us.idubi=ub.idubi WHERE us.idusu=:idusu";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO usuario(idper, nomusu, apeusu, emausu, pasusu, docusu, fotusu, etdusu, hisusu, tpodoc, genusu, fhnusu, actusu, idubi) VALUES(:idper, :nomusu, :apeusu, :emausu, :pasusu, :docusu, :fotusu, :etdusu, :hisusu, :tpodoc, :genusu, :fhnusu, :actusu, :idubi)";
        $result = $conexion->prepare($sql);
        $idper = $this->getIdper();
        $result->bindParam(":idper", $idper);
        $nomusu = $this->getNomusu();
        $result->bindParam(":nomusu", $nomusu);
        $apeusu = $this->getApeusu();
        $result->bindParam(":apeusu", $apeusu);
        $emausu = $this->getEmausu();
        $result->bindParam(":emausu", $emausu);
        $pasusu = $this->getPasusu();
        $result->bindParam(":pasusu", $pasusu);
        $docusu = $this->getDocusu();
        $result->bindParam(":docusu", $docusu);
        $fotusu = $this->getFotusu();
        $result->bindParam(":fotusu", $fotusu);
        $etdusu = $this->getEtdusu();
        $result->bindParam(":etdusu", $etdusu);
        $hisusu = $this->getHisusu();
        $result->bindParam(":hisusu", $hisusu);
        $tpodoc = $this->getTpodoc();
        $result->bindParam(":tpodoc", $tpodoc);
        $genusu = $this->getGenusu();
        $result->bindParam(":genusu", $genusu);
        $fhnusu = $this->getFhnusu();
        $result->bindParam(":fhnusu", $fhnusu);
        $actusu = $this->getActusu();
        $result->bindParam(":actusu", $actusu);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE usuario SET idper=:idper, nomusu=:nomusu, apeusu=:apeusu, emausu=:emausu, pasusu=:pasusu, docusu=:docusu, fotusu=:fotusu, etdusu=:etdusu, hisusu=:hisusu, tpodoc=:tpodoc, genusu=:genusu, fhnusu=:fhnusu, actusu=:actusu, idubi=:idubi WHERE idusu=:idusu";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idper = $this->getIdper();
        $result->bindParam(":idper", $idper);
        $nomusu = $this->getNomusu();
        $result->bindParam(":nomusu", $nomusu);
        $apeusu = $this->getApeusu();
        $result->bindParam(":apeusu", $apeusu);
        $emausu = $this->getEmausu();
        $result->bindParam(":emausu", $emausu);
        $pasusu = $this->getPasusu();
        $result->bindParam(":pasusu", $pasusu);
        $docusu = $this->getDocusu();
        $result->bindParam(":docusu", $docusu);
        $fotusu = $this->getFotusu();
        $result->bindParam(":fotusu", $fotusu);
        $etdusu = $this->getEtdusu();
        $result->bindParam(":etdusu", $etdusu);
        $hisusu = $this->getHisusu();
        $result->bindParam(":hisusu", $hisusu);
        $tpodoc = $this->getTpodoc();
        $result->bindParam(":tpodoc", $tpodoc);
        $genusu = $this->getGenusu();
        $result->bindParam(":genusu", $genusu);
        $fhnusu = $this->getFhnusu();
        $result->bindParam(":fhnusu", $fhnusu);
        $actusu = $this->getActusu();
        $result->bindParam(":actusu", $actusu);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM usuario WHERE idusu=:idusu";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $result->execute();
    }

    public function getTipod(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT idval, nomval FROM valor WHERE iddom=#";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getGeneu(){
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