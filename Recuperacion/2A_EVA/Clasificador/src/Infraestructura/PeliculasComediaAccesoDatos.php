<?php

class ComediaAccesoDatos{

    function __construct(){
    }

    function obtener(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "SELECT 
            ID, Titulo, Genero
        FROM
            peliculas_comedia;");
    
        $consulta->execute();
        $result = $consulta->get_result();

        $comedias =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($comedias,$myrow);
        }
        
        return $comedias;
    }

    function insertarComedia(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "INSERT INTO peliculas_comedia(ID, Titulo, Genero)
         SELECT 
            ID, Titulo, Genero
         FROM
            peliculas
         WHERE
            Genero = 'Comedia';");
    
        $consulta->execute();
        $result = $consulta->get_result();
        
        return $result;
    }
}