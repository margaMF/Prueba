<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

//Hacer un programa que escriba una frase 5 veces cambiando las vocales primero por "a", luego por "e"...

function esVocal($caracter)
{
    $vocales = array("a", "e", "i", "o","u");

    if (in_array($caracter, $vocales))
    {
        $res = true;
    }
    else
    {
        $res = false;
    }

    return $res;
}

$char = 'b';

function esVocalShort($char)
{
    return in_array($char, array("a", "e", "i", "o","u"));
}

function printWord($word,$vocal)
{
    $length = strlen($word);
    for ($i=0; $i<$length;$i++)
    {

        if (esVocalShort($word[$i]))
        {
            echo $vocal;
        }
        else
        {
            echo $word[$i];
        }
        
    }
}

echo esVocalShort($char);

?>