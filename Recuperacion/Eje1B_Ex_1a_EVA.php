<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

$palabra = "casa";
$frase = "La casa es blanca";

function existen_repetidos($palabra){
    $longitud = strlen($palabra);
    $resultado = false;
    for($i = 0; $i < $longitud; $i++){
        $letra = $palabra[$i];
        for($j = $i+1; $j < $longitud; $j++){
            if($letra == $palabra[$j]){
                $resultado = true;
                break;
            }
        }
        if($resultado == true){
            break;
        }
    }
    return $resultado;
}

//Comprobamos si hay una única letra.
function contieneLetra($texto,$letra) {
    $longitudTexto = strlen($texto);
    $res = false;

    //Recorremos $frase.
    for ($i = 0; $i < $longitudTexto; $i++){
        //Si la letra de la frase coincide con la letra de la cadena contiene esa letra.
        if ($texto[$i]==$letra){
            $res = true;
            break;
        }
    }
    return $res;
}

function contieneLetrasPalabra($palabra,$frase) {
    //Lanzamos una excepción si la letra está repetida.
    $condicion_excepcional = existen_repetidos($palabra);
    if($condicion_excepcional){
        throw new Exception("Se ha encontrado una letra repetida.");
    }

    //Obtenemos la longitud de $frase y $cadena.
    $numero_letras_frase = strlen($frase);
    $numero_letras_palabra = strlen($palabra);
    $resultado = true;

    //Recorremos $palabra
    for ($i = 0; $i < $numero_letras_palabra; $i++) {
            
        //Obtenemos cada letra por separado.
        $letra = $palabra[$i];
        //Comprobamos si esa letra no está en $frase y si no estádevolvemos false y salimos.
        if (!contieneLetra($frase,$letra)) {
            $resultado = false;
            break;
         }
    }

    return $resultado;
}

$letra = "a";

// function contar_palabras_con_letra($frase, $letra)
// {
//     $resultado = 0;
//     $palabras = explode(" ", $frase);
//     foreach ($palabras as $palabra)
//     {
//         if(contieneLetra($palabra, $letra))
//         {
//             $resultado++;
//         }
//     }
    
//     return $resultado;
// }

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

// echo contieneLetrasPalabra($palabra, $frase);
echo contar_palabras_con_letra($frase, $letra);
