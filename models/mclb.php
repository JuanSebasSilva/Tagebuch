<?php
class Mclb{
    private $idclb;
    private $nomclb;
    private $idubi;
    private $afclb;
    private $cmclb;
    private $preclb;
    private $desclb;

    function getIdclb(){
        return $this->idclb;
    }
    function getNomclb(){
        return $this->nomclb;
    }
    function getIdubi(){
        return $this->idubi;
    }
    function getAfclb(){
        return $this->afclb;
    }
    function getCmclb(){
        return $this->cmclb;
    }
    function getPreclb(){
        return $this->preclb;
    }
    function getDesclb(){
        return $this->desclb;
    }
    
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setNomclb($nomclb){
        $this->nomclb = $nomclb;
    }
    function setIdubi($idubi){
        $this->idubi = $idubi;
    }
    function setAfclb($afclb){
        $this->afclb = $afclb;
    }
    function setCmclb($cmclb){
        $this->cmclb = $cmclb;
    }
    function setPreclb($preclb){
        $this->preclb = $preclb;
    }
    function setDesclb($desclb){
        return $this->desclb;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT cl.idclb, cl.nomclb, cl.afclb, cl.cmclb, cl.preclb, cl.desclb, ub.idubi, ub.nomubi, ub.depubi 
        FROM club AS cl INNER JOIN ubicacion AS ub ON cl.idubi=ub.idubi";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT cl.idclb, cl.nomclb, cl.afclb, cl.cmclb, cl.preclb, cl.desclb, ub.idubi, ub.nomubi, ub.depubi 
        FROM club AS cl INNER JOIN ubicacion AS ub ON cl.idubi=ub.idubi WHERE cl.idclb=:idclb";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO club(nomclb, idubi, afclb, cmclb, preclb, desclb) VALUES (:nomclb, :idubi, :afclb, :cmclb, :preclb, :desclb)";
        $result = $conexion->prepare($sql);
        $nomclb = $this->getNomclb();
        $result->bindParam(":nomclb", $nomclb);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $afclb = $this->getAfclb();
        $result->bindParam(":afclb", $afclb);
        $cmclb = $this->getCmclb();
        $result->bindParam(":cmclb", $cmclb);
        $preclb = $this->getPreclb();
        $result->bindParam(":preclb", $preclb);
        $desclb = $this->getDesclb();
        $result->bindParam(':desclb', $desclb);
        $result->execute();
    }

    public function edit(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE club SET nomclb=:nomclb, idubi=:idubi, afclb=:afclb, cmclb=:cmclb, preclb=:preclb, desclb=:desclb WHERE idclb=:idclb";
        $result = $conexion->prepare($sql);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $nomclb = $this->getNomclb();
        $result->bindParam(":nomclb", $nomclb);
        $idubi = $this->getIdubi();
        $result->bindParam(":idubi", $idubi);
        $afclb = $this->getAfclb();
        $result->bindParam(":afclb", $afclb);
        $cmclb = $this->getCmclb();
        $result->bindParam(":cmclb", $cmclb);
        $preclb = $this->getPreclb();
        $result->bindParam(":preclb", $preclb);
        $desclb = $this->getDesclb();
        $result->bindParam(':desclb', $desclb);
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