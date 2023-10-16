<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

function extraerLetrasUnicasMayuscula($palabra){
    //Devuelve la longitud de la cadena.
    $logitudPalabra = strlen($palabra);
    $auxiliar = array();

    //Recorremos la cadena.
    for ($i=0; $i < $logitudPalabra; $i++) {
        //Si la letra no es un espacio en blanco. 
        if ($palabra[$i] != " ") {
            //Si la letra no está en $auxiliar.
            if(!in_array($palabra[$i], $auxiliar)){
                //Se introduce en el array.
                array_push($auxiliar, $palabra[$i]);
            }
        }
    }

    //Convertimos el resultado en String porqué devuelve un array.
    $resultado = implode($auxiliar);
    //Convertimos el resultado a mayúsculas.
    return strtoupper($resultado);
   
}

// echo extraerLetrasUnicasMayuscula($palabra);

function test_extraerLetrasUnicasMayuscula_1(){
    $palabra = "oso listo";
    $resultado = extraerLetrasUnicasMayuscula($palabra);
    return $resultado=="OSLIT"; 
}

var_dump(test_extraerLetrasUnicasMayuscula_1());