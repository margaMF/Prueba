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

                //Recibe el titulo por POST
                $titulo = $_POST['titulo'];

                //Crea el objetode negocio
                $peliculas = new PeliculasReglasDeNegocio();
                //Pasamos por parametro el $titulo recibido por POST al metodo buscar
                $datosPeliculas = $peliculas->buscar($titulo); 

                //Si titulo esta vacio imprime todas
                if($titulo == ""){

                    foreach ($datosPeliculas as $pelicula){
                        echo "<tr>";
                            //Si el director es Tim Burton aplica este estilo
                            if($pelicula->getDirector() == "Tim Burton"){
                                echo "<td class='director'>".$pelicula->getDirector()."</td>";
                                echo "<td class='director'>".$pelicula->getTitulo()."</td>";
                                echo "<td class='director'>".$pelicula->getEstreno()."</td>";
                            }
                            //Si el director es Quentin Tarantino no apliques ningun estilo
                            if($pelicula->getDirector() == "Quentin Tarantino"){
                                echo "<td>".$pelicula->getDirector()."</td>";
                                echo "<td>".$pelicula->getTitulo()."</td>";
                                echo "<td>".$pelicula->getEstreno()."</td>";
                            }
                        echo "</tr>";
                    }
                //Sino imprime la pelicula recibida
                }else {
                    foreach ($datosPeliculas as $pelicula){
                        echo "<tr>";
                            echo "<td>".$pelicula->getDirector()."</td>";
                            echo "<td>".$pelicula->getTitulo()."</td>";
                            echo "<td>".$pelicula->getEstreno()."</td>";
                        echo "</tr>";
                    }
                }

                ?>

            </table>
        </div>
    </div>
</body>
</html>