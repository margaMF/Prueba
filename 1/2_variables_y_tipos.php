<html>
<head>
    <title>Esto es el titulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
        <div class="primera_caja">
            <a href="index.html">INICIO</a>
            <a href="pagina1.html">Primera página</a>
            <a href="pagina2.html">Segunda página</a>
        </div>
        <div class="segunda_caja">

            <div class="primera_columna">
                <h1>EJERCICIOS</h1>
                <ul class="lista">
                    <li><a href="">1 Ejercicio</a></li>
                    <li><a href="">2 Ejercicio</a></li>
                    <li><a href="">3 Ejercicio</a></li>
                    <li><a href="">4 Ejercicio</a></li>
                    <li><a href="">5 Ejercicio</a></li>
                    <li><a href="">6 Ejercicio</a></li>
                    <li><a href="">7 Ejercicio</a></li>
                </ul>
            </div>
            <div class="segunda_columna">
                <?php
                    echo "Hola mundo!";
                    ECHO "Hola mundo!<br>";
                    print "pasa1 :) ";
                    
                    //Una variable!!
                    $color = "rojo";
                    echo "Mi coche es " . $color . "<br>";
                    
                    //Esto es un comentario de una línea

                    /*Comentario de varias líneas
                    
                    //PRIMERA LINEA
                    //SEGUNDA LINEA
                    
                    */

                    //PREGUNTA: ¿Que opinais sobre comentar el código?

                    $numero_entero = 5;
                    $numero_flotante = 6.5;
                    $cadena = "Hi!";

                    echo gettype($numero_entero)." ".$numero_entero . "<br>";
                    echo gettype($numero_flotante)." ".$numero_flotante . "<br>";
                    echo gettype($cadena)." ".$cadena . "<br>";
                    
                ?>
            </div>
            <div class="tercera_columna">bbb</div>

        </div>
        <div class="tercera_caja">ccc</div>
    <div>
</body>
</html>

