<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 'On');

    require_once("../Infraestructura/PeliculasAccesoDatos.php");

    class ClasificadorReglasNegocio{

        function clasificar(){
            $peliculasDAL = new PeliculasAccesoDatos();
            $peliculas = $peliculasDAL->obtener();

            $resultado = false;

            foreach ($peliculas as $pelicula){//Recorre los generos en vez de las peliculas
                if($pelicula['Genero'] == 'Terror'){
                    $peliculasDAL->insertarTerror($pelicula['ID'], $pelicula['Titulo'], $pelicula['Genero']);
                }


                if($pelicula['Genero'] == 'Comedia'){
                    $peliculasDAL->insertarComedia($pelicula['ID'], $pelicula['Titulo'], $pelicula['Genero']);
                }
            }   
            $peliculasDAL->borrar();
            $resultado = true;
        }

        function borrar(){
            $peliculasDAL = new PeliculasAccesoDatos();
            $peliculas = $peliculasDAL->borrar();

        }

    }

    // $peli = new ClasificadorReglasNegocio();
    // $peli->clasificar();