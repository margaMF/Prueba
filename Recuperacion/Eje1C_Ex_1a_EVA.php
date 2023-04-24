<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$parrafo = "La rana cantaba la balada. La casa es blanca y la nube es blanca y azul. El pez era amarillo.";
$letra = "a";

function contar_palabras_con_letra($frase, $letra)
{
    $resultado = 0;
    $palabras = explode(" ", $frase);
    foreach ($palabras as $palabra)
    {
        if(contieneLetra($palabra, $letra))
        {
            $resultado++;
        }
    }
    
    return $resultado;
}
