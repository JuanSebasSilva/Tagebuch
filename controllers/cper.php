<?php
    include("models/mper.php");

    $idper = isset($_REQUEST['idper']) ? $_REQUEST['idper']:NULL;
    $nomper = isset($_POST['nomper']) ? $_POST['nomper']:NULL;
    $pagini = isset($_POST['pagini']) ? $_POST['pagini']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mper = new Mper();
    $mper->setIdper();
    if($ope=="save"){
        $mper->setNomper($nomper);
        $mper->setPagini($pagini);
        if($idper) $mper->edit();
        else $mper->save();
    }

    if($ope=="del" && $idper) $mper->del();
    if($ope=="edit" && $idper){
        $dtOne = $mper->getOne();
    }else{
        $dtOne = NULL;
    }

    $datPg = $mper->getPag();
    $dat = $mper->getAll();
?>