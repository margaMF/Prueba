<?php

ini_set('display_errors', 'On');
ini_set('html_errors', 0);

class Calculadora{
    public function __construct(){

    }

    public function factorial($numero1){

        if($numero1 == 0){
            return 1;
        }elseif ($numero1 > 0){
            $resultado = 1;
            while($numero1 > 0){
                $resultado = $resultado * $numero1;
                $numero1 = $numero1 - 1;
            }

            return $resultado;
        }else{
            echo "El número debe ser mayor o igual a 0";
        }

    }

    public function coeficienteBinomial($numero1, $numero2){
        $factorialNum1 = $this->factorial($numero1);
        $factorialNum2 = $this->factorial($numero2);
        $resta = $numero1 - $numero2;
        $factorialNum3 = $this->factorial($resta);
        $resultado = $factorialNum1 / ($factorialNum2 * $factorialNum3);

        return $resultado;

    }

    public function convierteBinaroDecimal($cadenaBits){
        $longitudCadena = strlen($cadenaBits);
        $indiceCadena = $longitudCadena -1;
        $exponente = 0;
        $resultado = 0;

        while ($indiceCadena >= 0){
            $valorPosicion = $cadenaBits[$indiceCadena];
            $resultado = $resultado + ((2**$exponente)*($valorPosicion));
            $exponente++;
            $indiceCadena--;
        }

        return $resultado;
    }

    public function sumaNumerosPares($arrayNumeros){

        $contador = count($arrayNumeros);
        $resultado = 0;

        for($i = 0; $i < $contador; $i++){
            if(($arrayNumeros[$i] % 2) == 0){
                $resultado = $resultado + $arrayNumeros[$i];
            }
        }

        return $resultado;

    }

    public function esCapicua($cadena1){
        //return $cadena1 == strrev($cadena1);
        if($cadena1 == strrev($cadena1)){
            echo "Es capicua";
        }else{
            echo "No es capicua";
        }

    }

    public function esPalindromo($cadena2, $cadena3){
        //return $cadena2 == strrev($cadena3);
        if($cadena2 == strrev($cadena3)){
            echo "Es palindromo";
        }else {
            echo "No es palindromo";
        }
    }

    public function sumarMatrices($matriz1, $matriz2){

        $matrizAuxiliar = $matriz1;

        $contador = count($matriz1);
        for($i = 0; $i < $contador; $i++){
            for($j = 0; $j < $contador; $j++){
                $matrizAuxiliar[$i][$j] = $matrizAuxiliar[$i][$j] + $matriz2[$i][$j];
            }
        }

        return $matrizAuxiliar;

    }

 
}