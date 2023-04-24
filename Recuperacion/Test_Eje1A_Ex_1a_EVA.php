<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("Eje1A_Ex_1a_EVA.php");

function test_extraerLetrasUnicasMayuscula_1(){
    $palabra = "oso listo";
    $resultado = extraerLetrasUnicasMayuscula($palabra);
    return $resultado=="OSLIT"; 
}

//Porqué no funciona?????????????
function test_extraerLetrasUnicasMayuscula_2(){
    $palabra = "casa azul";
    $resultado = extraerLetrasUnicasMayuscula($palabra);
    return $resultado=="CASZUL"; 
}