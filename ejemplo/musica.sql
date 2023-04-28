CREATE DATABASE musica;

USE musica;

CREATE TABLE cancion (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100),
    artista VARCHAR(100),
    album VARCHAR(100),
    ano_publicacion INT
);

INSERT INTO cancion(nombre,artista,album,ano_publicacion) VALUES('Motomami','Rosalia','Motomami',2022), ('Bohemian Rapsody','Queen','Night at the Opera',1975);