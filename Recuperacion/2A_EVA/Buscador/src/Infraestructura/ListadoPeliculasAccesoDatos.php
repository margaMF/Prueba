<?php

class ListadoPeliculasAccesoDatos{

    function __construct(){
    }

    function obtener(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas');
        $consulta = mysqli_prepare($conexion, 
        "SELECT 
        T_Directores.Nombre,
        T_Peliculas.Titulo,
        T_Peliculas.Año
    FROM
        T_Peliculas
            INNER JOIN
        T_Directores ON T_Directores.ID = T_Peliculas.Id_director
    ORDER BY Año;");
    
        $consulta->execute();
        $result = $consulta->get_result();

        $peliculas =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($peliculas,$myrow);

        }
       
        return $peliculas;
    }
}

$pelicula = new ListadoPeliculasAccesoDatos();

