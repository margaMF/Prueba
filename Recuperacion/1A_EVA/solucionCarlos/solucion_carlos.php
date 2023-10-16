<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$palabra = "casa";
$frase = "la casa es blanca";

function existen_repetidos($palabra)
{
    $longitud = strlen($palabra);
    $resultado = false;
    for ($i = 0; $i < $longitud; $i++) 
    {
        $letra = $palabra[$i];
        for ($j = $i+1;$j<$longitud;$j++)
        {
            if ($letra==$palabra[$j])
            {
                $resultado = true;
                break;
            }
        }
        if ($resultado == true)
        {
            break;
        }
    }
    return $resultado;
}

function contieneLetra($texto,$letra) 
{
    $longitudTexto = strlen($texto);
    $res = false;

    for ($i = 0; $i < $longitudTexto; $i++)
    {
        if ($texto[$i]==$letra)
        {
            $res = true;
            break;
        }
    }
    return $res;
}

function contieneLetrasPalabra($palabra,$frase) 
{

    $condicion_excepcional_existen_repetidos = existen_repetidos($palabra); 
    if ($condicion_excepcional_existen_repetidos)        
    {
        throw new Exception("Hay repetidas en el parámetro palabra");
    }
    $numero_letras_frase = strlen($frase);
    $numero_letras_palabra = strlen($palabra);
    $resultado = true;
    for ($i = 0; $i < $numero_letras_palabra; $i++) 
    {
        $letra = $palabra[$i];
        if (!contieneLetra($frase,$letra)) 
        {
            $resultado = false;
            break;
        }
    }
    return $resultado;
}

echo contieneLetrasPalabra($palabra, $frase);