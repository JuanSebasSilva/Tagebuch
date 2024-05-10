<?php
    include("models/mubi.php");

    $idubi = isset($_REQUEST['idubi']) ? $_REQUEST['idubi']:NULL;
    $nomubi = isset($_POST['nomubi']) ? $_POST['nomubi']:NULL;
    $depubi = isset($_POST['depubi']) ? $_POST['depubi']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mubi = new Mubi();
    $mubi->setIdubi($idubi);
    if($ope=="save"){
        $mubi->setNomubi($nomubi);
        $mubi->setDepubi($depubi);
        if($idubi) $mubi->edit();
        else $mubi->save();
    }

    if($ope=="del" && $idubi) $mubi->del();
    if($ope=="edit" && $idubi){
        $dtOne = $mubi->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mubi->getAll();
    $dtDep = $mubi->getDepubi(0);
?>