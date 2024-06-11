<?php
    require_once("models/mdom.php");

    $mdom = new Mdom();

    $iddom =isset($_REQUEST['iddom']) ? $_REQUEST['iddom']:NULL;
    $nomdom=isset($_POST['nomdom']) ? $_POST['nomdom']:NULL;
    $ope =isset($_REQUEST['opera']) ? $_REQUEST['opera']:NULL;

    $mdom->setIddom($iddom);
    if($ope=="save"){
        $mdom->setNomdom($nomdom);
        if($iddom) $mdom->edit();
        else $mdom->save();
    }

    if($ope=="eli" && $iddom) $mdom->del();
    if($ope=="edit" && $iddom){
        $dtOne = $mdom->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mdom->getAll();
?>