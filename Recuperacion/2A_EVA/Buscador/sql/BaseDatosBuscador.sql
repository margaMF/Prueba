CREATE DATABASE IF NOT EXISTS bd_peliculas;
DROP DATABASE bd_peliculas;
/*-----------------------------------------------------------------------TABLAS----------------------------------------------------------------------------------*/
CREATE TABLE T_Directores(
ID INTEGER PRIMARY KEY,
Nombre VARCHAR(200) NOT NULL
);

CREATE TABLE T_Peliculas(
ID INTEGER PRIMARY KEY,
Titulo VARCHAR(200) NOT NULL,
Año INTEGER(4) NOT NULL,
Id_director INTEGER NOT NULL,
FOREIGN KEY (Id_director) REFERENCES T_Directores (ID)
);
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------DIRECTOR--------------------------------------------------------------------------------*/
INSERT INTO T_Directores VALUES 
	(1, 'Quentin Tarantino'),
    (2, 'Tim Burton');
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------PELICULAS-------------------------------------------------------------------------------*/
INSERT INTO T_Peliculas VALUES 
	(1, 'Djando Desencadenado', 2012, 1),
    (2, 'Malditos Bastardos', 2009, 1),
    (3, 'Los odiosos ocho', 2015, 1),
    (4, 'Big Fish', 2003, 2),
    (5, 'Pesadilla antes de Navidad', 1993, 2),
    (6, 'Alicia en el país de las maravillas', 2015, 2);

INSERT INTO T_Peliculas VALUES (7, 'Pulp Fiction', 1994, 1);
INSERT INTO T_Peliculas VALUES (8, 'Charlie y la fábrica de chocolate', 2005, 2);
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

/*-----------------------------------------------------------------------------CONSULTAS------------------------------------------------------------------------------*/
SELECT * FROM T_Directores;
SELECT * FROM T_Peliculas;
/*Consulta PeliculasAccesoDatos*/
SELECT 
    T_Directores.Nombre AS 'DIRECTOR',
    T_Peliculas.Titulo AS 'TÍTULO',
    T_Peliculas.Año AS 'AÑO'
FROM
    T_Peliculas
        INNER JOIN
    T_Directores ON T_Directores.ID = T_Peliculas.Id_director
WHERE
    T_Peliculas.Titulo = 'Los odiosos ocho';
/*Consulta VistaListadoPeliculas*/
SELECT 
    T_Directores.Nombre AS 'DIRECTOR',
    T_Peliculas.Titulo AS 'TÍTULO',
    T_Peliculas.Año AS 'AÑO'
FROM
    T_Peliculas
        INNER JOIN
    T_Directores ON T_Directores.ID = T_Peliculas.Id_director
ORDER BY Año;
/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

select count(ID) from T_Peliculas;
select sum(ID) from T_Peliculas;
select ID from T_Peliculas;