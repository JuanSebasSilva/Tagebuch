<?php
class Musu{
    private $idusu;
    private $idper;
    private $nomusu;
    private $empusu;
    private $emausu;
    private $pasusu;
    private $nitusu;
    private $fotusu;
    private $expusu;
    private $hisusu;
    private $salusu;
    private $tponit;
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
    function getEmpusu(){
        return $this->empusu;
    }
    function getEmausu(){
        return $this->emausu;
    }
    function getPasusu(){
        return $this->pasusu;
    }
    function getNitusu(){
        return $this->nitusu;
    }
    function getFotusu(){
        return $this->fotusu;
    }
    function getExpusu(){
        return $this->expusu;
    }
    function getHisusu(){
        return $this->hisusu;
    }
    function getSalusu(){
        return $this->salusu;
    }
    function getTponit(){
        return $this->tponit;
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
    function setEmpusu($empusu){
        $this->empusu = $empusu;
    }
    function setEmausu($emausu){
        $this->emausu = $emausu;
    }
    function setPasusu($pasusu){
        $this->pasusu = $pasusu;
    }
    function setNitusu($nitusu){
        $this->nitusu = $nitusu;
    }
    function setFotusu($fotusu){
        $this->fotusu = $fotusu;
    }
    function setExpusu($expusu){
        $this->expusu = $expusu;
    }
    function setHisusu($hisusu){
        $this->hisusu = $hisusu;
    }
    function setSalusu($salusu){
        $this->salusu = $salusu;
    }
    function setTponit($tponit){
        $this->tponit = $tponit;
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
        $sql = "SELECT us.idusu, us.nomusu, us.empusu, us.pasusu, us.nitusu, us.fotusu, us.expusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.actusu, us.emausu, pf.idper, pf.nomper, pf.pagini, tpv.idval AS tpiv, tpv.nomval AS tpnv, gnv.idval AS gniv, gnv.nomval AS gnnv, ub.idubi, ub.nomubi, ub.depubi 
        FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper INNER JOIN valor AS tpv ON us.tponit=tpv.idval INNER JOIN valor AS gnv ON us.genusu=gnv.idval INNER JOIN ubicacion AS ub ON us.idubi=ub.idubi";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT us.idusu, us.nomusu, us.empusu, us.pasusu, us.nitusu, us.fotusu, us.expusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.actusu, us.emausu, pf.idper, pf.nomper, pf.pagini, tpv.idval AS tpiv, tpv.nomval AS tpnv, gnv.idval AS gniv, gnv.nomval AS gnnv, ub.idubi, ub.nomubi, ub.depubi 
        FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper INNER JOIN valor AS tpv ON us.tponit=tpv.idval INNER JOIN valor AS gnv ON us.genusu=gnv.idval INNER JOIN ubicacion AS ub ON us.idubi=ub.idubi WHERE us.idusu=:idusu";
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
        $sql = "INSERT INTO usuario(idper, nomusu, empusu, emausu, pasusu, nitusu, fotusu, expusu,hisusu, salusu, tponit, genusu, fhnusu, actusu, idubi) VALUES(:idper, :nomusu, :empusu, :emausu, :pasusu, :nitusu, :fotusu, :expusu,:hisusu, :salusu, :tponit, :genusu, :fhnusu, :actusu, :idubi)";
        $result = $conexion->prepare($sql);
        $idper = $this->getIdper();
        $result->bindParam(":idper", $idper);
        $nomusu = $this->getNomusu();
        $result->bindParam(":nomusu", $nomusu);
        $empusu = $this->getEmpusu();
        $result->bindParam(":empusu", $empusu);
        $emausu = $this->getEmausu();
        $result->bindParam(":emausu", $emausu);
        $pasusu = $this->getPasusu();
        $result->bindParam(":pasusu", $pasusu);
        $nitusu = $this->getNitusu();
        $result->bindParam(":nitusu", $nitusu);
        $fotusu = $this->getFotusu();
        $result->bindParam(":fotusu", $fotusu);
        $expusu = $this->getExpusu();
        $result->bindParam(":expusu", $expusu);
        $hisusu = $this->getHisusu();
        $result->bindParam(":hisusu", $hisusu);
        $salusu = $this->getSalusu();
        $result->bindParam(":salusu", $salusu);
        $tponit = $this->getTponit();
        $result->bindParam(":tponit", $tponit);
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
        $sql = "UPDATE usuario SET idper=:idper, nomusu=:nomusu, empusu=:empusu, emausu=:emausu, pasusu=:pasusu, nitusu=:nitusu, fotusu=:fotusu, expusu=:expusu, hisusu=:hisusu, salusu=:salusu, tponit=:tponit, genusu=:genusu, fhnusu=:fhnusu, actusu=:actusu, idubi=:idubi WHERE idusu=:idusu";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idper = $this->getIdper();
        $result->bindParam(":idper", $idper);
        $nomusu = $this->getNomusu();
        $result->bindParam(":nomusu", $nomusu);
        $empusu = $this->getEmpusu();
        $result->bindParam(":empusu", $empusu);
        $emausu = $this->getEmausu();
        $result->bindParam(":emausu", $emausu);
        $pasusu = $this->getPasusu();
        $result->bindParam(":pasusu", $pasusu);
        $nitusu = $this->getNitusu();
        $result->bindParam(":nitusu", $nitusu);
        $fotusu = $this->getFotusu();
        $result->bindParam(":fotusu", $fotusu);
        $expusu = $this->getExpusu();
        $result->bindParam(":expusu", $expusu);
        $hisusu = $this->getHisusu();
        $result->bindParam(":hisusu", $hisusu);
        $salusu = $this->getSalusu();
        $result->bindParam(":salusu", $salusu);
        $tponit = $this->getTponit();
        $result->bindParam(":tponit", $tponit);
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
}
?>