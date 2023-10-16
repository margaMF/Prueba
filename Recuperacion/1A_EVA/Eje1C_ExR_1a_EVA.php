<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

//OPCIÓN CON UN FOREACH
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

//OPCIÓN CON UN FOR
function contar_palabras_con_letra($frase, $letra)
{
    $resultado = 0;
    $palabras = explode(" ", $frase);
    $longitud = count($palabras);

    for($i = 0; $i < $longitud; $i++)
    {
        if(contieneLetra($palabras[$i], $letra))
        {
            $resultado++;
        }
    }

    return $resultado;
}

function obtenerFraseMasPalabrasLetra($parrafo,$letra) 
{
    $resultado = "";

    $frases = explode(".", $parrafo); 
    $maxPalabrasConLetra = 0;
    foreach ($frases as $frase)  
    {
        if (strlen($frase)>0) 
        {
            $numeroPalabrasLetra = contar_palabras_con_letra($frase,$letra); 
            if ($numeroPalabrasLetra>$maxPalabrasConLetra) 
            {
                $maxPalabrasConLetra = $numeroPalabrasLetra; 
                $resultado = $frase; 
            }
        }
    }

    return $resultado;
}

function test3()
{
    print("test3");
    $parrafo = "La rana cantaba la balada. La casa es blanca y la nube es blanca y azul. El pez era amarillo.";
    $letra = "a";

    $resultado = obtenerFraseMasPalabrasLetra($parrafo,$letra);

    return $resultado == " La casa es blanca y la nube es blanca y azul";

}

//ejecución de test
    
var_dump(test3());