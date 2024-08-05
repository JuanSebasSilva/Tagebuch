<?php
    include("models/musu.php");

    $idusu = isset($_REQUEST['idusu']) ? $_REQUEST['idusu']:NULL;
    $idper = isset($_POST['idper']) ? $_POST['idper']:NULL;
    $nomusu = isset($_POST['nomusu']) ? $_POST['nomusu']:NULL;
    $emausu = isset($_POST['emausu']) ? $_POST['emausu']:NULL;
    $pasusu = isset($_POST['pasusu']) ? $_POST['pasusu']:NULL;
    $docusu = isset($_POST['docusu']) ? $_POST['docusu']:NULL;
    $fotusu = isset($_FILES['fotusu']) ? $_FILES['fotusu']:NULL;
    $etdusu = isset($_FILES['etdusu']) ? $_FILES['etdusu']:NULL;
    $hisusu = isset($_POST['hisusu']) ? $_POST['hisusu']:NULL;
    $tpodoc = isset($_POST['tpodoc']) ? $_POST['tpodoc']:NULL;
    $genusu = isset($_POST['genusu']) ? $_POST['genusu']:NULL;
    $fhnusu = isset($_POST['fhnusu']) ? $_POST['fhnusu']:NULL;
    $actusu = isset($_POST['actusu']) ? $_POST['actusu']:NULL;
    $idubi = isset($_POST['idubi']) ? $_POST['idubi']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $musu = new Musu();
    $musu->setIdusu($idusu);
    if($ope=="save"){
        $musu->setIdper($idper);
        $musu->setNomusu($nomusu);
        $musu->setEmausu($emausu);
        $musu->setPasusu($pasusu);
        $musu->setDocusu($docusu);
        $musu->setFotusu($fotusu);
        $musu->setEtdusu($etdusu);
        $musu->setHisusu($hisusu);
        $musu->setTpodoc($tpodoc);
        $musu->setGenusu($genusu);
        $musu->setFhnusu($fhnusu);
        $musu->setActusu($actusu);
        $musu->setIdubi($idubi);
        if($idusu) $musu->edit();
        else $musu->save();
    }

    if($ope=="del") $musu->del();
    if($ope=="edit"){
        $dtOne = $musu->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $musu->getAll();
?>