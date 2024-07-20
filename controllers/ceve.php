<?php
    include("models/meve.php");

    $ideve = isset($_REQUEST['ideve']) ? $_REQUEST['ideve']:NULL;
    $idubi = isset($_POST['idubi']) ? $_POST['idubi']:NULL;
    $nomeve = isset($_POST['nomeve']) ? $_POST['nomeve']:NULL;
    $deseve = isset($_POST['deseve']) ? $_POST['deseve']:NULL;
    $tpoeve = isset($_POST['tpoeve']) ? $_POST['tpoeve']:NULL;
    $dureve = isset($_POST['dureve']) ? $_POST['dureve']:NULL;
    $etdeve = isset($_POST['etdeve']) ? $_POST['etdeve']:NULL;
    $reseve = isset($_POST['reseve']) ? $_POST['reseve']:NULL;
    $fheve = isset($_POST['fheve']) ? $_POST['fheve']:NULL;
    $ope = isset($_REQUEST['ope'])  ? $_REQUEST['ope']:NULL;

    $meve = new Meve();
    $meve->setIdeve($ideve);
    if($ope=="save"){
        $meve->setidubi($idubi);
        $meve->setnomeve($nomeve);
        $meve->setdeseve($deseve);
        $meve->settpoeve($tpoeve);
        $meve->setdureve($dureve);
        $meve->setetdeve($etdeve);
        $meve->setreseve($reseve);
        $meve->setfheve($fheve);
        if($ideve) $meve->edit();
        else $meve->save();
    }

    if($ope=="del" && $ideve) $meve->del();
    if($ope=="edit" && $ideve){
        $dtOne = $meve->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $meve->getAll();
    $datV = $meve->getTipoe();
?>