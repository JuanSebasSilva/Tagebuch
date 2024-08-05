<?php
    include("models/mtrs.php");

    $idtrs = isset($_REQUEST['idtrs']) ? $_REQUEST['idtrs']:NULL;
    $idusu = isset($_POST['idusu']) ? $_POST['idusu']:NULL;
    $idclb = isset($_POST['idclb']) ? $_POST['idclb']:NULL;
    $ficotrs = isset($_POST['ficotrs']) ? $_POST['ficotrs']:NULL;
    $valtrs = isset($_POST['valtrs']) ? $_POST['valtrs']:NULL;
    $bontrs = isset($_POST['bontrs']) ? $_POST['bontrs']:NULL;
    $dettrs = isset($_POST['dettrs']) ? $_POST['dettrs']:NULL;
    $etdtrs = isset($_POST['etdtrs']) ? $_POST['etdtrs']:NULL;
    $frcltrs = isset($_POST['frcltrs']) ? $_POST['frcltrs']:NULL;
    $frustrs = isset($_POST['frustrs']) ? $_POST['frustrs']:NULL;
    $tmtrs = isset($_POST['tmtrs']) ? $_POST['tmtrs']:NULL;
    $ope = isset($_REQUEST['ope']) ? $_REQUEST['ope']:NULL;

    $mtrs = new Mtrs();
    $mtrs->setIdtrs($idtrs);
    if($ope=="save"){
        $mtrs->setIdusu($idusu);
        $mtrs->setIdclb($idclb);
        $mtrs->setFicotrs($ficotrs);
        $mtrs->setValtrs($valtrs);
        $mtrs->setBontrs($bontrs);
        $mtrs->setDettrs($dettrs);
        $mtrs->setEtdtrs($etdtrs);
        $mtrs->setFrcltrs($frcltrs);
        $mtrs->setFrustrs($frustrs);
        $mtrs->setTmtrs($tmtrs);
        if($idtrs) $mtrs->edit();
        else $mtrs->save();
    }

    if($ope=="del" && $idtrs) $mtrs->del();
    if($ope=="edit" && $idtrs){
        $dtOne = $mtrs->getOne();
    }else{
        $dtOne = NULL;
    }

    $dat = $mtrs->getAll();
?>