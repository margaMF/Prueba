<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("solucion_carlos.php");

function test_se_lanza_excepcion()
{
    try
    {
        $palabra = "casa";
        $frase = "la casa es blanca";
        $resultado = contieneLetrasPalabra($palabra,$frase);
        return false;
    } 
    catch (Exception $e)
    {
        print($e);
        return true;
    }
}