DROP DATABASE IF EXISTS Sistema_Control_Usuarios;

CREATE DATABASE Sistema_Control_Usuarios;

USE Sistema_Control_Usuarios;

CREATE TABLE Usuario (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(255),
    apellido varchar(255),
    genero varchar(255),
    edad int(3),
    PRIMARY KEY (id)
);

ALTER TABLE Usuario AUTO_INCREMENT=1;