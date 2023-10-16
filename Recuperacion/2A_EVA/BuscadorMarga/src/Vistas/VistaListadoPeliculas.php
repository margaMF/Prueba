<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Peliculas</title>
    <link rel="stylesheet" href="../../css/vistaListadoPeliculas.css">
</head>
<body>
    <div class="contenedor">
        <h1>Ficha general de películas</h1>
        <div class="contenedorTabla">
            <table>

                <tr>
                    <th>DIRECTOR</th>
                    <th>PELÍCULA</th>
                    <th>ESTRENO</th>
                </tr>

                <?php
                require("../Negocio/PeliculasReglasDeNegocio.php");

                $titulo = $_POST['titulo'];

                $peliculas = new PeliculasReglasDeNegocio();
                $datosPeliculas = $peliculas->buscar($titulo); 

                // if($titulo == ""){

                    foreach ($datosPeliculas as $pelicula){
                        echo "<tr>";
                            if($pelicula->getDirector() == "Tim Burton"){
                                echo "<td class='director'>".$pelicula->getDirector()."</td>";
                                echo "<td class='director'>".$pelicula->getTitulo()."</td>";
                                echo "<td class='director'>".$pelicula->getEstreno()."</td>";
                            }
                            if($pelicula->getDirector() == "Quentin Tarantino"){
                                echo "<td>".$pelicula->getDirector()."</td>";
                                echo "<td>".$pelicula->getTitulo()."</td>";
                                echo "<td>".$pelicula->getEstreno()."</td>";
                            }
                        echo "</tr>";
                    }
                // }else {
                    // foreach ($datosPeliculas as $pelicula){
                    //     echo "<tr>";
                    //         echo "<td>".$pelicula->getDirector()."</td>";
                    //         echo "<td>".$pelicula->getTitulo()."</td>";
                    //         echo "<td>".$pelicula->getEstreno()."</td>";
                    //     echo "</tr>";
                    // }
                // }

                ?>

            </table>
        </div>
    </div>
</body>
</html>