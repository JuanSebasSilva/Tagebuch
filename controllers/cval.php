<?php
    include("models/mval.php");

    $idval = isset($_REQUEST['idval']) ? $_REQUEST['idval']:NULL;
    $nomval = isset($_POST['nomval']) ? $_POST['nomval']:NULL;
    $iddom = isset($_POST['iddom']) ? $_POST['iddom']:NULL;
    $parval = isset($_POST['parval']) ? $_POST['parval']:NULL;
    $actval = isset($_POST['actval']) ? $_POST['actval']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mval = new Mval();
    $mval->setIdval($idval);
    if($ope=="save"){
        $mval->setNomval($nomval);
        $mval->setIddom($iddom);
        $mval->setParval($parval);
        $mval->setActval($actval);
        if($idval) $mval->edit();
        else $mval->save();
    }

    if($ope=="del" && $idval) $mval->del();
    if($ope=="edit" && $idval){
        $dtOne = $mval->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mval->getAll();
?>