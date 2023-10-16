<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("Eje1C_ExR_1a_EVA.php");

function test_()
{
    
    $parrafo = "La rana cantaba la balada. La casa es blanca y la nube es blanca y azul. El pez era amarillo.";
    $letra = "a";

    $resultado = obtenerFraseMasPalabrasLetra($parrafo,$letra);

    return $resultado == " La casa es blanca y la nube es blanca y azul";
}

