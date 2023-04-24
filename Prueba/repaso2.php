<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

//Para saber el tipo de la variable.
$numero = 2;
$palabra = "Hola";

echo gettype($numero).": ".$numero."<br>";
echo gettype($palabra).": ".$palabra."<br><br>";

 /*Dar un valor del array y que devuelva la posición de la primera vez que aparece ese valor*/

$arrayNumeros = array(5, 2, 8, 4, 1);
$numBuscado = 2;

function buscarPosicion($arrayNumeros, $numBuscado){
    $contador = count($arrayNumeros);
    for ($i = 0; $i < $contador; $i++){
        if($arrayNumeros[$i] == $numBuscado){
            return $i;
        }
    }

}

$posicion = buscarPosicion($arrayNumeros, $numBuscado);
echo "El número $numBuscado aparece por primera vez en la posición $posicion.";

