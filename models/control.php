<?php
    require_once("conexion.php");
    $uss = isset($_POST['usu']) ? $_POST['usu']:NULL;
    $cnt = isset($_POST['con']) ? $_POST['con']:NULL;

    if($uss AND $cnt){
        valida($uss, $cnt);
    }else{
        volver();
    }

    function valida($usu, $cnt){
        $res = paso($usu, $cnt);
        $res = isset($res) ? $res:NULL;
        if($res){
            session_start();
            $_SESSION['idusu'] = $res[0]['idusu'];
            $_SESSION['nomusu'] = $res[0]['nomusu'];
            $_SESSION['idper'] = $res[0]['idper'];
            $_SESSION['nomper'] = $res[0]['nomper'];
            $_SESSION['idclb'] = $res[0]['idclb'];
            $_SESSION['nomclb'] = $res[0]['nomclb'];
            $_SESSION['pagini'] = $res[0]['pagini'];
            $_SESSION['aut'] = 'qwe1534!"#;';
            echo "<script>window.location = '../home.php';</script>";
        }else{
            volver();
        }
    }

    function volver(){
        echo "<script>window.location = '../index.php?error=Ok';</script>";
    }

    function paso($usu, $cnt){
        $res = NULL;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $cnt = sha1(md5($cnt.'#De1;'));
        $sql = "SELECT us.idusu, us.nomusu, us.nitusu, us.idper, pf.nomper, pf.pagini FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper WHERE us.actusu=1 AND us.emausu=:emausu AND us.pasusu=:pasusu";
        $result = $conexion->prepare($sql);
        $result->bindParam(":emausu", $usu);
        $result->bindParam(":pasusu", $cnt);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC);
        return $res;
    }
?>