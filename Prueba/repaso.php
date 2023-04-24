<?php
/*-----Funciones-----*/
// $caracter = "a";

//  function esVocal($caracter){

//      if (($caracter == 'a') || ($caracter == 'e') || ($caracter == 'i') || ($caracter == 'o') || ($caracter == 'u')){
//          return true;
//      }else{
//          return false;
//      }

//  }

//  echo esVocal($caracter);

// $num1 = 5;
// $num2 = 7;

// function sumar($num1, $num2){
//     $resultado = $num1 + $num2;
//     return $resultado;
// }

// echo "$num1 + $num2 = ".sumar($num1, $num2);


/*-----Arrays-----*/
// $coches = array("Peugeot", "Citroen", "Seat");

// echo $coches[2];


/*-----Arrays asociativos como imprimir-----*/
// $personas = array("Juan"=>"20", "Marga"=>26, "Martina"=>27);

// function imprimirArray($personas){
//     $resultado = "";
//     foreach($personas as $key=>$val)
//         $resultado.=$key.'=>'.$val.",<br>";
//     return $resultado;
// }

// echo imprimirArray($personas);


/*-----Array multidimensional-----*/
// $matriz = array(
//     array(4,0,2),
//     array(6,7,9),
//     array(1,2,2)
// );

// $contador = count($matriz);

// for ($i = 0; $i < $contador; $i++){
//     echo "<p><b>Fila numero $i: <br></b></p>";
//     $contador = count($matriz[$i]);
//     for ($j = 0; $j < $contador; $j++){
//         echo"[".$matriz[$i][$j]."]";
//     }
// }

/*-----Formas de recorrer un array-----*/
// $nombres = ["Django", "Jaume", "Marga"];

// foreach ($nombres as $nombre){
//     echo "<li>$nombre</li>";
// }

// $contador = count($nombres);
// for ($i = 0; $i < $contador; $i++){
//     echo "<br>$nombres[$i]<br>";
// }

/*-----Funciones predefinidas de cadenas-----*/
// $cadena = "hola hola1 hola2";
// $separador = explode(", ", $cadena);
// echo $cadena."<br>";

// $array = ["Django", "Jaume", "Marga", "Helena"];

// echo implode("','", $array);

// $cadena2 = "hola";
// echo "<br>".strtolower($cadena2);
// echo "<br>".strtoupper($cadena2);

/*-----Funciones arrays-----*/

//ORDENAR UN ARRAY
$numeros = array(7, 8, 6, 5, 1);
sort($numeros);
foreach($numeros as $key=>$val){
    echo $val." ";
}


?>