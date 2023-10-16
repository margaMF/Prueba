<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 'On');

//Funcion a la que se le pasa una matriz como parametro y devuelve true si tiene valores repetidos y false si no tiene repetidos.

$matriz = array(
    array(1, 8, 4, 3),
    array(2, 5, 9, 10),
    array(6, 7, 11, 1),
);

//OPCION 1
function existenRepetidos($matriz){
   $longitud = count($matriz);
   $auxiliar = array();
   $resultado = false;

    for ($i=0; $i < $longitud; $i++) { 
        $max_columnas = count($matriz[$i]);
        for ($j=0; $j < $max_columnas; $j++) { 
           
            array_push($auxiliar, $matriz[$i][$j]);
        }
    }

    $max_auxiliar = count($auxiliar);
    for ($i=0; $i < $max_auxiliar; $i++) { 
        for ($j=$i+1; $j < $max_auxiliar; $j++) { 
            if($auxiliar[$i] == $auxiliar[$j]){
                $resultado = true;
            }
        }
    }
    
   return $resultado;
}

var_dump(existenRepetidos($matriz));

//OPCION 2
function existenRepetidos2($matriz){
    $filas_maximas=count($matriz);
    $aux=array();

    for ($i=0; $i < $filas_maximas; $i++) { 
        $columnas_maximas=count($matriz[$i]);

        for ($j=0; $j < $columnas_maximas; $j++) { 
            array_push($aux,$matriz[$i][$j]);
        }
    }
    
    $noHayRepetidos = array_unique($aux);
    $prueba1 = count($noHayRepetidos);
    $prueba2 = count($aux);
    $resultado = $prueba1 < $prueba2;

    echo $prueba1.'<br>';
    echo $prueba2.'<br>';

    return $resultado;
} 

var_dump(existenRepetidos2($matriz));