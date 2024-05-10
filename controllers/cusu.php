<?php
    include("models/musu.php");

    $idusu = isset($_REQUEST['idusu']) ? $_REQUEST['idusu']:NULL;
    $idper = isset($_POST['idper']) ? $_POST['idper']:NULL;
    $nomusu = isset($_POST['nomusu']) ? $_POST['nomusu']:NULL;
    $empusu = isset($_POST['empusu']) ? $_POST['empusu']:NULL;
    $emausu = isset($_POST['emausu']) ? $_POST['emausu']:NULL;
    $pasusu = isset($_POST['pasusu']) ? $_POST['pasusu']:NULL;
    $nitusu = isset($_POST['nitusu']) ? $_POST['nitusu']:NULL;
    $fotusu = isset($_FILES['fotusu']) ? $_FILES['fotusu']:NULL;
    $expusu = isset($_FILES['expusu']) ? $_FILES['expusu']:NULL;
    $hisusu = isset($_POST['hisusu']) ? $_POST['hisusu']:NULL;
    $salusu = isset($_POST['salusu']) ? $_POST['salusu']:NULL;
    $tponit = isset($_POST['tponit']) ? $_POST['tponit']:NULL;
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
        $musu->setEmpusu($empusu);
        $musu->setEmausu($emausu);
        $musu->setPasusu($pasusu);
        $musu->setNitusu($nitusu);
        $musu->setFotusu($fotusu);
        $musu->setExpusu($expusu);
        $musu->setEdtusu($edtusu);
        $musu->setHisusu($hisusu);
        $musu->setSalusu($salusu);
        $musu->setTponit($tponit);
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