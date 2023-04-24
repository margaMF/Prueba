<?php

$matriz = array(
    array(4, 9, 2),
    array(3, 5, 7),
    array(8, 1, 6)
);

$max_filas = count($matriz);

for ($fila = 0; $fila < $max_filas; $fila++){
    echo"<p><b>Fila numero $fila</b></p>";
    $max_columna_fila = count($matriz[$fila]);
    for ($columna = 0; $columna < $max_columna_fila; $columna++){
        echo "[".$matriz[$fila][$columna]."],";
    }
}
