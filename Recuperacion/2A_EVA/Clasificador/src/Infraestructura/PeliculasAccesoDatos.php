<?php

class PeliculasAccesoDatos{

    function __construct(){
    }

    //Devolver todos los generos de la tabla
    function obtener(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "SELECT 
            ID, Titulo, Año, Id_director, Genero
        FROM
            peliculas;");
    
        $consulta->execute();
        $result = $consulta->get_result();

        $peliculas =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($peliculas,$myrow);
        }
        
        return $peliculas;
    }

    function borrar(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "DELETE FROM peliculas 
         WHERE
            Genero = 'Terror' OR Genero = 'Comedia';");
    
        $consulta->execute();
        $result = $consulta->get_result();
        
        return $result;
    }

    //Cambiar a insertar values
    function insertarTerror(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "INSERT INTO peliculas_terror(ID, Titulo, Genero) 
         SELECT 
            ID, Titulo, Genero 
         FROM 
            peliculas 
         WHERE 
            Genero = 'Terror';");
    
        $consulta->execute();
        $result = $consulta->get_result();
        
        return $result;
    }

    //Cambiar a insertar values
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