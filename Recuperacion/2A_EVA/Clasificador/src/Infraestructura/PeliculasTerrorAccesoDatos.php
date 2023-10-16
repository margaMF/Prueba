<?php

class TerrorAccesoDatos{

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
            peliculas_terror;");
    
        $consulta->execute();
        $result = $consulta->get_result();

        $terror =  array();

        while ($myrow = $result->fetch_assoc()) {
            array_push($terror,$myrow);
        }
        
        return $terror;
    }

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
}