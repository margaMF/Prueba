<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="../../css/buscador.css">
</head>
<body>
   <div class="contenedor">
    <div class="contenedorForm">
        <h1 class="titulo">Buscador de peliculas</h1>
        <form method = 'POST' action="../Vistas/VistaListadoPeliculas.php">
            <input type="text" name="titulo" id="titulo" size="80" class="cajaBuscar" placeholder="  Escribe el título de la pelicula...">
            <input type="submit" name="buscar" value="Buscar" class="botonBuscar">
        </form>
    </div>
   </div> 
</body>
</html>