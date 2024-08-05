<?php
    include("models/mnc.php");

    $idnc = isset($_REQUEST['idnc']) ? $_REQUEST['idnc']:NULL;
    $idclb = isset($_POST['idclb']) ? $_POST['idclb']:NULL;
    $nomnc = isset($_POST['nomnc']) ? $_POST['nomnc']:NULL;
    $desnc = isset($_POST['desnc']) ? $_POST['desnc']:NULL;
    $fecha = date('Y - m - d H : i : s');
    $fhpnc = isset($_POST['fhpnc']) ? $_POST['fhpnc']:$fecha;
    $autnc = isset($_POST['autnc']) ? $_POST['autnc']:NULL;
    $etdnc = isset($_POST['etdnc']) ? $_POST['etdnc']:NULL;
    $princ = isset($_POST['princ']) ? $_POST['princ']:NULL;
    $tponc = isset($_POST['tponc']) ? $_POST['tponc']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mnc = new mnc();
    $mnc->setIdnc($idnc);
    if($ope=="save"){
        $mnc->setIdclb($idclb);
        $mnc->setNomnc($nomnc);
        $mnc->setDesnc($desnc);
        $mnc->setFhpnc($fhpnc);
        $mnc->setAutnc($autnc);
        $mnc->setEtdnc($etdnc);
        $mnc->setPrinc($princ);
        $mnc->setTponc($tponc);
        if($idnc) $mnc->edit();
        else $mnc->save();
    }

    if($ope=="del" && $idnc) $mnc->del();
    if($ope=="edit" && $idnc){
        $dtOne = $mnc->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mnc->getAll();
    $datEtd = $mnc->getEstnc();
    $datPri = $mnc->getPrinc();
    $datTpo = $mnc->getTiponc();
?>