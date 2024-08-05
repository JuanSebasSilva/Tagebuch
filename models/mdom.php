<?php
class Mdom{
    private $iddom;
    private $nomdom;

    function getIddom(){
        return $this->iddom;
    }
    function getNomdom(){
        return $this->nomdom;
    }

    function setIddom($iddom){
        $this->iddom = $iddom;
    }
    function setNomdom($nomdom){
        $this->nomdom = $nomdom;
    }

    public function getAll(){
        try{
            $res = NULL;
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = 'SELECT iddom, nomdom FROM dominio';
            $result = $conexion->prepare($sql);
            $result->execute();
            $res = $result->fetchall(PDO::FETCH_ASSOC);
            return $res;
        }catch(Exception $e){
            echo 'Error: '.$e;
        }
    }

    public function getOne(){
        try{
            $res = NULL;
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = 'SELECT iddom, nomdom FROM dominio WHERE iddom=:iddom';
            $result = $conexion->prepare($sql);
            $iddom = $this->getIddom();
            $result->bindParam(':iddom', $iddom);
            $result->execute();
            $res = $result->fetchall(PDO::FETCH_ASSOC);
            return $res;
        }catch(Exception $e){
            echo 'Error: '.$e;
        }
    }

    public function save(){
        try{
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = 'INSERT INTO dominio(nomdom) VALUES(:nomdom)';
            $result = $conexion->prepare($sql);
            $nomdom = $this->getNomdom();
            $result->bindParam(':nomdom', $nomdom);
            $result->execute();
        }catch(Exception $e){
            echo 'Error: '.$e;
        }
    }

    public function edit(){
        try{
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = 'UPDATE dominio SET nomdom=:nomdom WHERE iddom=:iddom';
            $result = $conexion->prepare($sql);
            $iddom = $this->getIddom();
            $result->bindParam(':iddom', $iddom);
            $nomdom = $this->getNomdom();
            $result->bindParam(':nomdom', $nomdom);
            $result->execute();
        }catch(Exception $e){
            echo 'Error: '.$e;
        }
    }

    public function del(){
        try{
            $modelo = new conexion();
            $conexion = $modelo->get_conexion();
            $sql = 'DELETE FROM dominio WHERE iddom=:iddom';
            $result = $conexion->prepare($sql);
            $iddom = $this->getIddom();
            $result->bindParam(':iddom', $iddom);
            $result->execute();
        }catch(Exception $e){
            echo 'Error: '.$e;
        }
    }
}
?>