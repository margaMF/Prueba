<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

//Intercambio de filas de una matriz usando una clase.

class Matriz
{
    private $matriz;

    function __construct($vector)
    {
        $this->matriz = $vector;
    }

    function validarIndice($indice)
    {
        $max_filas = count($this->matriz) -1;

        if (($indice>($max_filas)) || ($indice<0))
        {
            return false;
        }
        return true;
    }

    function intercambiar($indice_fila1, $indice_fila2)
    {
        $rango = "[0..".(count($this->matriz) -1)."]";
        if (!$this->validarIndice($indice_fila1))
        {
            throw new Exception("El parámetro indice_fila1 está fuera del rango válido para las filas:".$rango);
        }

        if (!$this->validarIndice($indice_fila2))
        {
            throw new Exception("El parámetro indice_fila2 está fuera del rango válido para las filas:".$rango);
        }
        $fila_z = $this->matriz[$indice_fila1];
        $this->matriz[$indice_fila1] = $this->matriz[$indice_fila2];
        $this->matriz[$indice_fila2] = $fila_z;
    }
}

function test_intercambiar()
{
    $vector = array(
        array(3,1,0),
        array(0,0,0),
        array(1,3,4),
        array(6,7,8));
    $matriz = new Matriz($vector);
    $matriz->intercambiar(1,3);

    $vector2 = array(
        array(3,1,0),
        array(6,7,8),
        array(1,3,4),
        array(0,0,0));
    $matriz2 = new Matriz($vector2);

    return $matriz == $matriz2;
}

function test_intercambiar_iguales()
{
    $vector = array(
        array(3,1,0),
        array(0,0,0),
        array(1,3,4),
        array(6,7,8));
    $matriz = new Matriz($vector);
    $matriz->intercambiar(3,3);

    $vector2 = array(
        array(3,1,0),
        array(0,0,0),
        array(1,3,4),
        array(6,7,8));
    $matriz2 = new Matriz($vector2);

    return $matriz == $matriz2;
}

function test_intercambiar_exception()
{
    try
    {
        $vector = array(
            array(3,1,0),
            array(0,0,0),
            array(1,3,4),
            array(6,7,8));
        $matriz = new Matriz($vector);
        $matriz->intercambiar(9,3);

        $vector2 = array(
            array(3,1,0),
            array(0,0,0),
            array(1,3,4),
            array(6,7,8));
        $matriz2 = new Matriz($vector2);

        return $matriz == $matriz2;
    } catch (Exception $e)
    {
        print($e);
        return true;
    }
}

var_dump(test_intercambiar());
// var_dump(test_intercambiar_iguales());
// var_dump(test_intercambiar_exception());