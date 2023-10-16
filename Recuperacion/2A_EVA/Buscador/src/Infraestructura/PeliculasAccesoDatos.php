<?php

class PeliculasAccesoDatos{

    function __construct(){
    }

    function obtener($titulo){
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
        WHERE
            T_Peliculas.Titulo = ?;"); // consulta con prepared statements

        //Saneamos el valor siempre que venga de fuera del codigo
        $sanitized_titulo = mysqli_real_escape_string($conexion, $titulo); 
        //El bind puede ser s(string), i(integer)
        $consulta->bind_param("s", $sanitized_titulo);
        $consulta->execute();
        $result = $consulta->get_result();

        $pelicula =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($pelicula,$myrow);

        }
        
        return $pelicula;
    }
}

