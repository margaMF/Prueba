<?php

class PeliculasAccesoDatos{

    function __construct(){
    }

    //Devolver todos los generos de la tabla
    function obtenerGeneros(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "SELECT 
            distinct(Genero)
        FROM
            peliculas;");
    
        $consulta->execute();
        $result = $consulta->get_result();

        $generos =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($generos,$myrow);
        }
        
        return $generos;
    }

    function obtenerTodo(){
        $conexion = mysqli_connect('localhost','root','1234');
        if (mysqli_connect_errno()){
                echo "Error al conectar a MySQL: ". mysqli_connect_error();
        }
        mysqli_select_db($conexion, 'bd_peliculas_clasificador');
        $consulta = mysqli_prepare($conexion, 
        "SELECT 
            ID, Titulo, Genero
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
    // function insertarTerror(){
    //     $conexion = mysqli_connect('localhost','root','1234');
    //     if (mysqli_connect_errno()){
    //             echo "Error al conectar a MySQL: ". mysqli_connect_error();
    //     }
    //     mysqli_select_db($conexion, 'bd_peliculas_clasificador');
    //     $consulta = mysqli_prepare($conexion, 
    //     "INSERT INTO peliculas_terror (ID, Titulo, Genero) VALUES (ID, Titulo, Genero);");
    
    //     $consulta->execute();
    //     $result = $consulta->get_result();
        
    //     return $result;
    // }

    //Cambiar a insertar values
    function insertar(){
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
            Genero = ?;");
        
        $consulta->bind_param("s",)
        $consulta->execute();
        $result = $consulta->get_result();
        
        return $result;
    }
}