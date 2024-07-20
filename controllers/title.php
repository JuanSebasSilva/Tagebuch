<?php
    function title($icon, $tit, $mos){
        $txt = '';
        $txt .= '<h1>';
            $txt .= '<i class="'.$icon'"></i>';
            $txt .= ' '.$tit;
        $txt .= '</h1>';
        if($mos==1){
            $txt .= '<i class="fa-solid fa-circle-plus fa-2x btnadd" id="btnmas" onclick="botonTitle(1);"></i>';
            $txt .= '<i class="fa-solid fa-circle-minus fa-2x btnadd" id="btnmen" onclick="botonTitle(2);"></i>'
        }
        return $txt;
    }
?>