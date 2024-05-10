<?php
    include("models/mntcm.php");

    $idntcm = isset($_REQUEST['idntcm']) ? $_REQUEST['idntcm'];
    $idclb = isset($_POST['idclb']) ? $_POST['idclb'];
    $fhpubntcm = isset($_POST['fhpubntcm']) ? $_POST['fhpubntcm'];
    $autntcm = isset($_POST['autntcm']) ? $_POST['autntcm'];
    $etdntcm = isset($_POST['etdntcm']) ? $_POST['etdntcm'];
    $printcm = isset($_POST['printcm']) ? $_POST['printcm'];
    $tpontcm = isset($_POST['tpontcm']) ? $_POST['tpontcm'];
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope'];

    $mntcm = new Mntcm();
    $mntcm->setIdntcm($idntcm);
    if($ope=="save"){
        $mntcm->setIdclb($idclb);
        $mntcm->setFhpubntcm($fhpubntcm);
        $mntcm->setAutntcm($autntcm);
        $mntcm->setEtdntcm($etdntcm);
        $mntcm->setPrintcm($printcm);
        $mntcm->setTpontcm($tpontcm);
        if($idntcm) $mntcm->edit();
        else $mntcm->save();
    }

    if($ope=="del" && $idntcm) $mntcm->del();
    if($ope=="edit" && $idntcm){
        $dtOne = $mntcm->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mntcm->getAll();
?>