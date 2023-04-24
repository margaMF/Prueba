<?php 

    /*Dar un valor del array y que devuelva la posición de la primera vez que aparece ese valor*/

    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    $numeros = array(1, 6, 10, 8, 3, 5);
    $numero = 3;


    function buscarPosicionNum($num, $arrayNumeros){

        $contador = count($arrayNumeros);
        $i = 0;

        while ($i < $contador){

            if($arrayNumeros[$i] == $num){
                
                return $i;
            }else{
                $i++;
            }
            
        } 

    }

    $posicion = buscarPosicionNum($numero, $numeros);
    echo "El número ".$numero." está en la posición ".$posicion;
   

?>