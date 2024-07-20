<?php
    include('../models/conexion.php');
    include('../models/mubi.php');

    $valor = $_REQUEST['valor'];
    $html = '';
    $muni = new Mubi();
    $dat = $muni->getDep($valor);
    $html = '<div id="reload">';
        $html .= '<select name="idubi" id="idubi" class="form-control form-select">';
            if($dat){ foreach($dat as $dp){
                $html .= '<option value="'.$dp['idubi'].'">';
                    $html .= $dt['nomubi'];
                $html .= '</option>';
            }}
        $html .= '</select>';
    $html .= '</div>';
    echo $html;
?>