<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

require("calculadora.php");

$numero1 = 4;
$numero2 = 2;
$cadenaBits = "1000";
$arrayNumeros = array(2, 2, 4, 3);
$cadena1 = "ana";
$cadena2 = "amor";
$cadena3 = "roma";
$matriz1 = array(
    array(2,3),
    array(1,2)
);
$matriz2 = array(
    array(1,1),
    array(2,2)
);

$Calculadora = new Calculadora();
echo "EJERCICIO 1<br>";
echo "El factorial del número $numero1 es ".$Calculadora->factorial($numero1).".<br>";

$Calculadora2 = new Calculadora();
echo "<br>EJERCICIO 2<br>";
echo "El coeficiente binomial de $numero1 y $numero2 es ".$Calculadora->coeficienteBinomial($numero1, $numero2).".<br>";

$Calculadora3 = new Calculadora();
echo "<br>EJERCICIO 3<br>";
echo "El número decimal de la cadena indicada es: ".$Calculadora->convierteBinaroDecimal($cadenaBits).".<br>";

$Calculadora4 = new Calculadora();
echo "<br>EJERCICIO 4<br>";
echo "La suma de los números pares del array es: ".$Calculadora->sumaNumerosPares($arrayNumeros).". <br>";

$Calculadora5 = new Calculadora();
echo "<br>EJERCICIO 5<br>";
echo $Calculadora->esCapicua($cadena1).".<br>";

$Calculadora6 = new Calculadora();
echo "<br>EJERCICIO 6<br>";
echo $Calculadora->esPalindromo($cadena2, $cadena3).".<br>";

$Calculadora7 = new Calculadora();
echo "<br>EJERCICIO 7<br>";
print_r ($Calculadora->sumarMatrices($matriz1, $matriz2));