<?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 'On');

    require_once("../Infraestructura/PeliculasAccesoDatos.php");
    require_once("../Infraestructura/ListadoPeliculasAccesoDatos.php");

    class PeliculasReglasDeNegocio{
        private $_Director;
        private $_Titulo;
        private $_Estreno;

        function __construct(){
        }

        function init($director, $titulo, $estreno){
            $this->_Director = $director;
            $this->_Titulo = $titulo;
            $this->_Estreno = $estreno;
        }

        function getDirector(){
            return $this->_Director;
        }

        function getTitulo(){
            return $this->_Titulo;
        }

        function getEstreno(){
            return $this->_Estreno;
        }

        //Recibe por parametro el titulo pasado por POST a la vista
        function buscar($tituloPelicula){
            //Si titulo esta vacio imprime todas las peliculas
            if ($tituloPelicula == ""){
                $listado = new ListadoPeliculasAccesoDatos();
                $resultado = $listado->obtener();

                $listadoPeliculas = array();

                foreach($resultado as $datosLista){
                    $peliculaReglasNegocio = new PeliculasReglasDeNegocio();
                    $peliculaReglasNegocio->init($datosLista['Nombre'], $datosLista['Titulo'], $datosLista['Año']);//nombre==bd
                    array_push($listadoPeliculas, $peliculaReglasNegocio);
                }
                return $listadoPeliculas;

            } else{
                //Sino imprime la pelicula recibida por parametro
                $pelicula = new PeliculasAccesoDatos();
                $resultado = $pelicula->obtener($tituloPelicula);

                $datosPelicula = array();

                foreach($resultado as $datos){
                    $peliculasReglasNegocio = new PeliculasReglasDeNegocio();
                    $peliculasReglasNegocio->init($datos['Nombre'], $datos['Titulo'], $datos['Año']);
                    array_push($datosPelicula, $peliculasReglasNegocio);
                }

                return $datosPelicula;
            }
        }
    }