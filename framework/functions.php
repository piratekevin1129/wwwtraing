<?php
function sanitize($txt){
    $txt = str_replace('"','',$txt);
    $txt = str_replace("'",'',$txt);
    $txt = str_replace('/','',$txt);
    $txt = str_replace('\\','',$txt);
    $txt = str_replace('<','',$txt);
    $txt = str_replace('>','',$txt);
    return $txt;
}
?>