<?php
    include("models/mclb.php");
    include('models/mubi.php');

    $mclb = new Mclb();
    $mubi = new Mubi();
    $datU = $mclb->getDep(0);

    $idclb = isset($_REQUEST['idclb']) ? $_REQUEST['idclb']:NULL;
    $idins = isset($_POST['idins']) ? $_POST['idins']:NULL;
    $nomclb = isset($_POST['nomclb']) ? $_POST['nomclb']:NULL;
    $idubi = isset($_POST['idubi']) ? $_POST['idubi']:NULL;
    $anoforclb = isset($_POST['anoforclb']) ? $_POST['anoforclb']:NULL;
    $cstmenusu = isset($_POST['cstmenusu']) ? $_POST['cstmenusu']:NULL;
    $preclb = isset($_POST['preclb']) ? $_POST['preclb']:NULL;
    $ope = isset($_REQUEST['ope'])  ? $_REQUEST['ope']:NULL;

    $mclb->setIdclb($idclb);
    if($ope=="save"){
        $mclb->setNomclb($nomclb);
        $mclb->setIdubi($idubi);
        $mclb->setAnoforclb($anoforclb);
        $mclb->setCstmenusu($cstmenusu);
        $mclb->setPreclb($preclb);
        if($idclb) $mclb->edit();
        else $mclb->save();
    }

    if($ope=="del" && $idclb) $mclb->del();
    if($ope=="edit" && $idclb){
        $idOne = $mclb->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mclb->getAll();
?>