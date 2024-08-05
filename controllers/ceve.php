<?php
    include("models/meve.php");

    $ideve = isset($_REQUEST['ideve']) ? $_REQUEST['ideve']:NULL;
    $idubi = isset($_POST['idubi']) ? $_POST['idubi']:NULL;
    $nomeve = isset($_POST['nomeve']) ? $_POST['nomeve']:NULL;
    $deseve = isset($_POST['deseve']) ? $_POST['deseve']:NULL;
    $tpoeve = isset($_POST['tpoeve']) ? $_POST['tpoeve']:NULL;
    $etdeve = isset($_POST['etdeve']) ? $_POST['etdeve']:NULL;
    $reseve = isset($_POST['reseve']) ? $_POST['reseve']:NULL;
    $fieve = isset($_POST['fieve']) ? $_POST['fieve']:NULL;
    $ffeve = isset($_POST['ffeve']) ? $_POST['ffeve']:NULL;
    $ope = isset($_REQUEST['ope'])  ? $_REQUEST['ope']:NULL;

    $meve = new Meve();
    $meve->setIdeve($ideve);
    if($ope=="save"){
        $meve->setIdubi($idubi);
        $meve->setNomeve($nomeve);
        $meve->setDeseve($deseve);
        $meve->setTpoeve($tpoeve);
        $meve->setEtdeve($etdeve);
        $meve->setReseve($reseve);
        $meve->setFieve($fieve);
        $meve->setFfeve($ffeve);
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