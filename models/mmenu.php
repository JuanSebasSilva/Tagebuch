<?php
class Mmenu{
    private $idpag;
    function getIdpag(){
        return $this->idpag;
    }

    function setIdpag($idpag){
        $this->idpag = $idpag;
    }

    public function getMenu(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT pg.idpag, pg.nompag, pg.rutpag, pg.mospag, pg.ordpag, pf.idper, pg.icopag FROM pagina AS pg INNER JOIN perfil AS pf ON pg.idpag=pf.idpag WHERE pf.idper=:idper";
        $result = $conexion->prepare($sql);
        $idper = isset($_SESSION['idper']) ? $_SESSION['idper']:0;
        $result->bindParam(":idper", $idper);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getPagDf(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $model->get_conexion();
        $sql = "SELECT idper, nomper, pagini FROM perfil WHERE idper=:idper";
        $idper = isset($_SESSION['idper']) ? $_SESSION['idper']:0;
        $result->bindParam(":idper", $idper);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getVal(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $model->get_conexion();
        $sql = "SELECT pg.idpag, pg.nompag, pg.rutpag, pg.mospag, pg.ordpag, pf.idper, pg.icopag FROM pagina AS pg INNER JOIN perfil AS pf ON pg.idpag=pf.idpag WHERE pf.idper=:idper AND pg.idpag=:idpag";
        $result = $conexion->prepare($sql);
        $idper = isset($_SESSION['idper']) ? $_SESSION['idper']:0;
        $result->bindParam(":idper", $idper);
        $idpag = $this->getIdpag();
        $result->bindParam(":idpag", $idpag);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
}
?>