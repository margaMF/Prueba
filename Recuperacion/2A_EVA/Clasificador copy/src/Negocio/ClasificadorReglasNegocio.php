<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 'On');

    require_once("../Infraestructura/PeliculasAccesoDatos.php");

    class ClasificadorReglasNegocio{

        function clasificar(){
            $peliculasDAL = new PeliculasAccesoDatos();
            $generos = $peliculasDAL->obtener();
            $peliculas = $peliculasDAL->obtenerTodo();

            $resultado = false;

            foreach ($generos as $genero){//Recorre los generos en vez de las peliculas
                foreach($peliculas as $pelicula){
                    if($genero['Genero'] == 'Terror'){
                        $peliculasDAL->insertarTerror($genero['ID'], $genero['Titulo'], $genero['Genero']);
                    }
                }

                // if($pelicula['Genero'] == 'Comedia'){
                //     $peliculasDAL->insertarComedia($pelicula['ID'], $pelicula['Titulo'], $pelicula['Genero']);
                // }
            }   
            // $peliculasDAL->borrar();
            $resultado = true;
        }

        function borrar(){
            $peliculasDAL = new PeliculasAccesoDatos();
            $peliculas = $peliculasDAL->borrar();

        }

    }

    // $peli = new ClasificadorReglasNegocio();
    // $peli->clasificar();