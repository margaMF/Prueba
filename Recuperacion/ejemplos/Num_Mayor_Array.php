<?php

$numeros = array(3, 5, 2, 1, 4, 6, 10);

function numeroMayor($numeros)
{
    $numMax = $numeros[0];
    $longitud = count($numeros);

    for($i = 0; $i < $longitud; $i++)
    {
        if($numeros[$i] > $numMax)
        {
            $numMax = $numeros[$i];
        }
    }
    return $numMax;
}

echo numeroMayor($numeros);