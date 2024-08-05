<?php
    include("models/mins.php");

    $idins = isset($_REQUEST['idins']) ? $_REQUEST['idins']:NULL;
    $idusu = isset($_POST['idusu']) ? $_POST['idusu']:NULL;
    $idpla = isset($_POST['idpla']) ? $_POST['idpla']:NULL;
    $fhins = isset($_POST['fhins']) ? $_POST['fhins']:NULL;
    $etdins = isset($_POST['etdins']) ? $_POST['etdins']:NULL;
    $idclb = isset($_POST['idclb']) ? $_POST['idclb']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mins = new Mins();
    $mins->setIdins($idins);
    if($ope=="save"){
        $mins->setIdusu($idusu);
        $mins->setIdpla($idpla);
        $mins->setFhins($fhins);
        $mins->setEtdins($etdins);
        $mins->setIdclb($idclb);
        if($idins) $mins->edit();
        else $mins->save();
    }

    if($ope=="del" && $idins) $mins->del();
    if($ope=="edit" && $idins){
        $dtOne = $mins->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mins->getAll();
?>