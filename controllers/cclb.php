<?php
    include("models/mclb.php");
    include('models/mubi.php');

    $mclb = new Mclb();
    $mubi = new Mubi();
    $datU = $mclb->getDep(0);

    $idclb = isset($_REQUEST['idclb']) ? $_REQUEST['idclb']:NULL;
    $nomclb = isset($_POST['nomclb']) ? $_POST['nomclb']:NULL;
    $idubi = isset($_POST['idubi']) ? $_POST['idubi']:NULL;
    $afclb = isset($_POST['afclb']) ? $_POST['afclb']:NULL;
    $cmclb = isset($_POST['cmclb']) ? $_POST['cmclb']:NULL;
    $preclb = isset($_POST['preclb']) ? $_POST['preclb']:NULL;
    $desclb = isset($_POST['desclb']) ? $_POST['desclb']:NULL;
    $ope = isset($_REQUEST['ope'])  ? $_REQUEST['ope']:NULL;

    $mclb->setIdclb($idclb);
    if($ope=="save"){
        $mclb->setNomclb($nomclb);
        $mclb->setIdubi($idubi);
        $mclb->setAfclb($afclb);
        $mclb->setCmclb($cmclb);
        $mclb->setPreclb($preclb);
        $mclb->setDesclb($desclb);
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