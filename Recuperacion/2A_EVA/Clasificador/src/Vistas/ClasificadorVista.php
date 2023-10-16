<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificador</title>
    <!-- <link rel="stylesheet" href="../../css/vistaListadoPeliculas.css"> -->
</head>
<body>
    <div class="contenedor">
        <h1>Proceso de clasificación</h1>

        <?php
        require("../Negocio/ClasificadorReglasNegocio.php");

        $peliculas = new ClasificadorReglasNegocio();
        $resultado = $peliculas->clasificar();

        if($resultado){
            echo "¡El proceso se ha ejecutado correctamente!";
            
        }else {
            echo "El proceso no se ha podidio ejecutar... Se ha producido un error.";
        }

        ?>
    </div>
</body>
</html>