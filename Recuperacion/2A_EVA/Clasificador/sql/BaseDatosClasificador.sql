CREATE DATABASE IF NOT EXISTS bd_peliculas_clasificador;
DROP DATABASE IF EXISTS bd_peliculas_clasificador;
USE bd_peliculas_clasificador;
/*-----------------------------------------------------------------------TABLAS----------------------------------------------------------------------------------*/
CREATE TABLE peliculas_terror(
ID INT PRIMARY KEY,
Titulo VARCHAR(200) NOT NULL,
Genero ENUM('Terror')
);

CREATE TABLE peliculas_comedia(
ID INT PRIMARY KEY,
Titulo VARCHAR(200) NOT NULL,
Genero ENUM('Comedia')
);

CREATE TABLE peliculas(
ID INT PRIMARY KEY,
Titulo VARCHAR(200) NOT NULL,
Año INTEGER(4) NOT NULL,
Id_director INTEGER NOT NULL,
Genero ENUM('Terror', 'Comedia')
);
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------PELICULAS-------------------------------------------------------------------------------*/
INSERT INTO peliculas VALUES 
	(1, 'Sinister', 2012, 1, 'Terror'),
    (2, 'Expediente Warren: The Conjuring', 2013, 5, 'Terror'),
    (3, 'Hereditary', 2018, 6, 'Terror'),
    (4, 'La visita', 2015, 7, 'Terror'),
    (5, '¿Quién son los Miller?', 2013, 2, 'Comedia'),
    (6, 'El dictador', 2012, 3, 'Comedia'),
    (7, 'Borat', 2020, 3, 'Comedia'),
    (8, 'El show de Truman', 1998, 4, 'Comedia');
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------CONSULTAS PÁCTICA--------------------------------------------------------------------------*/
#Consulta para todas las peliculas
SELECT 
    ID, Titulo, Año, Id_director, Genero
FROM
    peliculas;

#Consulta para borrar los datos de la tabla peliculas
DELETE FROM peliculas 
WHERE
    Genero = 'Terror' OR Genero = 'Comedia';

#Consulta para insertar peliculas en peliculas_terror
INSERT INTO peliculas_terror(ID, Titulo, Genero) 
	SELECT 
		ID, Titulo, Genero 
    FROM 
		peliculas 
	WHERE 
		Genero = 'Terror';

#Consulta para insertar peliculas en peliculas_comedia
INSERT INTO peliculas_comedia(ID, Titulo, Genero)
	SELECT 
		ID, Titulo, Genero
	FROM
		peliculas
	WHERE
		Genero = 'Comedia';
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------CONSULTAS PRUEBAS-----------------------------------------------------------------------------*/

#Consulta datos peliculas_terror
SELECT 
    ID, Titulo, Genero
FROM
    peliculas_terror;

#Borrar datos
delete from peliculas_terror where Genero = 'Terror';
delete from peliculas_comedia where Genero = 'Comedia';

#Consulta datos peliculas_comedia
SELECT 
    ID, Titulo, Genero
FROM
    peliculas_comedia;
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
