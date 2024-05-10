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
            $_SESSION['idper'] = $res[0][''];
            $_SESSION['nomper'] = $res[0]['nomper'];
            $_SESSION['pagini'] = $res[0]['nomper'];
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
        $cnt = sha1(md5('#De1;'.$cnt));
        $sql = "SELECT us.idusu, us.nomusu, us.nitusu, us.idper, pf.nomper, pf.pagini FROM usuario AS us INNER JOIN perfil AS pf ON us.idper=pf.idper WHERE actusu=1 AND us.emausu=:emausu AND us.pasusu=:pasusu";
        $result = $conexion->prepare($sql);
        $result->bindParam(":emausu", $emausu);
        $result->bindParam(":pasusu", $pasusu);
        $result->execute();
        $res = $result->fetchall(PDO::FETCH_ASSOC)
        return $res;
    }
?>