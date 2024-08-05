<?php
class Mtra{
    private $idtrs;
    private $idusu;
    private $idclb;
    private $ficotrs;
    private $valtrs;
    private $bontrs;
    private $dettrs;
    private $etdtrs;
    private $frcltrs;
    private $frustrs;
    private $tmtrs;

    function getIdtrs(){
        return $this->idtrs;
    }
    function getIdusu(){
        return $this->idusu;
    }
    function getIdclb(){
        return $this->idclb;
    }
    function getFicotrs(){
        return $this->ficotrs;
    }
    function getValtrs(){
        return $this->valtrs;
    }
    function getBontrs(){
        return $this->bontrs;
    }
    function getDettrs(){
        return $this->dettrs;
    }
    function getEtdtrs(){
        return $this->etdtrs;
    }
    function getFrcltrs(){
        return $this->frcltrs;
    }
    function getFrustrs(){
        return $this->frustrs;
    }
    function getTmtrs(){
        return $this->tmtrs;
    }

    function setIdtrs($idtrs){
        $this->idtrs = $idtrs;
    }
    function setIdusu($idusu){
        $this->idusu = $idusu;
    }
    function setIdclb($idclb){
        $this->idclb = $idclb;
    }
    function setFicotrs($ficotrs){
        $this->ficotrs = $ficotrs;
    }
    function setValtrs($valtrs){
        $this->valtrs = $valtrs;
    }
    function setBontrs($bontrs){
        $this->bontrs = $bontrs;
    }
    function setDettrs($dettrs){
        $this->dettrs = $dettrs;
    }
    function setEtdtrs($etdtrs){
        $this->etdtrs = $etdtrs;
    }
    function setFrcltrs($frcltrs){
        $this->frcltrs = $frcltrs;
    }
    function setFrustrs($frustrs){
        $this->frustrs = $frustrs;
    }
    function setTmtrs($tmtrs){
        $this->tmtrs = $tmtrs;
    }

    public function getAll(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT tr.idtrs, tr.ficotrs, tr.valtrs, tr.bontrs, tr.dettrs, tr.etdtrs, tr.frcltrs, tr.frustrs, tr.tmtrs, us.idusu, us.idper, us.nomusu, us.empusu, us.nitusu, us.fotusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.idubi, us.emausu, 
        cl.idclb, cl.nomclb, cl.idubi, cl.preclb, etv.idval, etv.nomval FROM traspaso AS tr INNER JOIN usuario AS us ON tr.idusu=us.idusu INNER JOIN club AS cl ON tr.idclb=cl.idclb INNER JOIN valor AS etv ON tr.etdtrs=etv.idval";
        $result = $conexion->prepare($sql);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getOne(){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "SELECT tr.idtrs, tr.ficotrs, tr.valtrs, tr.bontrs, tr.dettrs, tr.etdtrs, tr.frcltrs, tr.frustrs, tr.tmtrs, us.idusu, us.idper, us.nomusu, us.empusu, us.nitusu, us.fotusu, us.edtusu, us.hisusu, us.salusu, us.tponit, us.genusu, us.fhnusu, us.idubi, us.emausu, 
        cl.idclb, cl.nomclb, cl.idubi, cl.preclb, etv.idval, etv.nomval FROM traspaso AS tr INNER JOIN usuario AS us ON tr.idusu=us.idusu INNER JOIN club AS cl ON tr.idclb=cl.idclb INNER JOIN valor AS etv ON tr.etdtrs=etv.idval WHERE tr.idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "INSERT INTO traspaso(idusu, idclb, ficotrs, valtrs, bontrs, dettrs, etdtrs, frcltrs, frustrs, tmtrs) VALUES(:idusu, :idclb, :ficotrs, :valtrs, :bontrs, :dettrs, :etdtrs, :frcltrs, :frustrs, :tmtrs)";
        $result = $conexion->prepare($sql);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $ficotrs = $this->getFicotrs();
        $result->bindParam(":ficotrs", $ficotrs);
        $valtrs = $this->getValtrs();
        $result->bindParam(":valtrs", $valtrs);
        $bontrs = $this->getBontrs();
        $result->bindParam(":bontrs", $bontrs);
        $dettrs = $this->getDettrs();
        $result->bindParam(":dettrs", $dettrs);
        $etdtrs = $this->getEtdtrs();
        $result->bindParam(":etdtrs", $etdtrs);
        $frcltrs = $this->getFrcltrs();
        $result->bindParam(":frcltrs", $frcltrs);
        $frustrs = $this->getFrustrs();
        $result->bindParam(":frustrs", $frustrs);
        $tmtrs = $this->getTmtrs();
        $result->bindParam(":tmtrs", $tmtrs);
        $result->execute();
    }

    public function save(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "UPDATE traspaso SET idusu=:idusu, idclb=:idclb, ficotrs=:ficotrs, valtrs=:valtrs, bontrs=:bontrs, dettrs=:dettrs, etdtrs=:etdtrs, frcltrs=:frcltrs, frustrs=:frustrs, tmtrs=:tmtrs WHERE idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $idusu = $this->getIdusu();
        $result->bindParam(":idusu", $idusu);
        $idclb = $this->getIdclb();
        $result->bindParam(":idclb", $idclb);
        $ficotrs = $this->getFicotrs();
        $result->bindParam(":ficotrs", $ficotrs);
        $valtrs = $this->getValtrs();
        $result->bindParam(":valtrs", $valtrs);
        $bontrs = $this->getBontrs();
        $result->bindParam(":bontrs", $bontrs);
        $dettrs = $this->getDettrs();
        $result->bindParam(":dettrs", $dettrs);
        $etdtrs = $this->getEtdtrs();
        $result->bindParam(":etdtrs", $etdtrs);
        $frcltrs = $this->getFrcltrs();
        $result->bindParam(":frcltrs", $frcltrs);
        $frustrs = $this->getFrustrs();
        $result->bindParam(":frustrs", $frustrs);
        $tmtrs = $this->getTmtrs();
        $result->bindParam(":tmtrs", $tmtrs);
        $result->execute();
    }

    public function del(){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "DELETE FROM traspaso WHERE idtrs=:idtrs";
        $result = $conexion->prepare($sql);
        $idtrs = $this->getIdtrs();
        $result->bindParam(":idtrs", $idtrs);
        $result->execute();
    }

    public function getEstt(){
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