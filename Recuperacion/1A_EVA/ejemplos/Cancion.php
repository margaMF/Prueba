<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desarrollo de aplicaciones web en entorno servidor</title> 
</head>
<body>
<div> Curso de PHP - uso de require e include. Funciones.</div>

<?php
        $words = ["el", "sapo", "no", "se","lava","el","pie."];
        $vocals = ["a", "e", "i", "o","u"];
?>

<?php

    require("CambiarVocal.php");
    echo "<div>";
    foreach ($words as $w)
    {
        echo $w." ";
    }
    echo "</div>";

    foreach ($vocals as $v)
    {   echo "<div>";
        print("Vocal: ".$v. "<br>");
        foreach ($words as $w)
        {
            echo printWord($w,$v)." ";
            // print($w);
        }
        echo "</div>";
    }
?>
</body>
</html>