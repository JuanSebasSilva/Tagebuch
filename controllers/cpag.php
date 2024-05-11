<?php
    include("models/mpag.php");

    $idpag = isset($_REQUEST['idpag']) ? $_REQUEST['idpag']:NULL;
    $nompag = isset($_POST['nompag']) ? $_POST['nompag']:NULL;
    $rutpag = isset($_POST['rutpag']) ? $_POST['rutpag']:NULL;
    $mospag = isset($_POST['mospag']) ? $_POST['mospag']:NULL;
    $ordpag = isset($_POST['ordpag']) ? $_POST['ordpag']:NULL;
    $icopag = isset($_POST['icopag']) ? $_POST['icopag']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mpag = new Mpag();
    $mpag->setIdpag($idpag);
    if($ope=="save"){
        $mpag->setNompag($nompag);
        $mpag->setRutpag($rutpag);
        $mpag->setMospag($mospag);
        $mpag->setOrdpag($ordpag);
        $mpag->setIcopag($icopag);
        if($idpag) $mpag->edit();
        else $mpag->save();
    }

    if($ope=="del" && $idpag) $mpag->del();
    if($ope=="edit" && $idpag){
        $dtOne = $mpag->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mpag->getAll();
?>