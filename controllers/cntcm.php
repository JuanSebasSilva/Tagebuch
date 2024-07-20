<?php
    include("models/mntcm.php");

    $idntcm = isset($_REQUEST['idntcm']) ? $_REQUEST['idntcm']:NULL;
    $idclb = isset($_POST['idclb']) ? $_POST['idclb']:NULL;
    $nomntcm = isset($_POST['nomntcm']) ? $_POST['nomntcm']:NULL;
    $desntcm = isset($_POST['desntcm']) ? $_POST['desntcm']:NULL;
    $fecha = date('Y - m - d H : i : s');
    $fhpubntcm = isset($_POST['fhpubntcm']) ? $_POST['fhpubntcm']:$fecha;
    $autntcm = isset($_POST['autntcm']) ? $_POST['autntcm']:NULL;
    $etdntcm = isset($_POST['etdntcm']) ? $_POST['etdntcm']:NULL;
    $printcm = isset($_POST['printcm']) ? $_POST['printcm']:NULL;
    $tpontcm = isset($_POST['tpontcm']) ? $_POST['tpontcm']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mntcm = new Mntcm();
    $mntcm->setIdntcm($idntcm);
    if($ope=="save"){
        $mntcm->setIdclb($idclb);
        $mntcm->setNomntcm($nomntcm);
        $mntcm->setDesntcm($desntcm);
        $mntcm->setFhpubntcm($fhpubntcm);
        $mntcm->setAutntcm($autntcm);
        $mntcm->setEtdntcm($etdntcm);
        $mntcm->setPrintcm($printcm);
        $mntcm->setTpontcm($tpontcm);
        if($idntcm) $mntcm->edit();
        else $mntcm->save();
    }

    if($ope=="del" && $idntcm) $mntcm->del();
    if($ope=="edit" && $idntcm){
        $dtOne = $mntcm->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mntcm->getAll();
    $datEtd = $mntcm->getEstnc();
    $datPri = $mntcm->getPrinc();
    $datTpo = $mntcm->getTiponc();
?>