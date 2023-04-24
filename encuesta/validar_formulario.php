<?php 
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $id = $_POST['id'];
    $genero = $_POST['genero'];
    $edad = $_POST['edad'];
    $observaciones = $_POST['observaciones'];
    $localidad = $_POST['localidad'];
    $calidad1 = $_POST['calidad1'];
    $calidad2 = $_POST['calidad2'];
    $calidad3 = $_POST['calidad3'];

    echo '<b>DATOS DEL FORMULARIO</b><br><br>';
    echo '<b>Nombre: </b>'.$nombre.'<br>';
    echo '<b>Apellidos: </b>'.$apellidos.'<br>';
    echo '<b>Identificador: </b>'.$id.'<br>';
    echo '<b>Genero: </b>'.$genero.'<br>';
    echo '<b>Edad: </b>'.$edad.'<br>';
    echo '<b>Observaciones: </b>'.$observaciones.'<br>';
    echo '<b>Localidad: </b>'.$localidad.'<br><br>';
    echo '<b>1. ¿Qué tal ha sido la calidad del desayuno?</b><br>'.$calidad1.'<br>';
    echo '<b>2. ¿Qué tal ha sido la calidad de la comida?</b><br>'.$calidad2.'<br>';
    echo '<b>3. ¿Qué tal ha sido la calidad de la cena?</b><br>'.$calidad3.'<br>';
?>
