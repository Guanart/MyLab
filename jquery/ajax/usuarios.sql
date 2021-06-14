-- Este archivo puede ser importado desde MySQL. Al hacerlo, ejecutará todas las sentencias;

CREATE DATABASE BDusuarios;
USE BDusuarios;

CREATE TABLE usuarios (
    ID_Usuario int AUTO_INCREMENT NOT NULL,
    nombre_Usuario varchar(25) NOT NULL,
    PRIMARY KEY (ID_Usuario)
);

INSERT INTO usuarios (ID_Usuario, nombre_Usuario) VALUES (NULL, 'Juan');
-- Usamos NULL en el primero campo (ID), para que se asigne un valor incremental automáticamente;
INSERT INTO usuarios (ID_Usuario, nombre_Usuario) VALUES (NULL, 'Pedro');
INSERT INTO usuarios (ID_Usuario, nombre_Usuario) VALUES (NULL, 'Agustina');
INSERT INTO usuarios (ID_Usuario, nombre_Usuario) VALUES (NULL, 'Martin');

-- Otra forma sería:
-- INSERT usuarios VALUES(NULL, 'Juan'), (NULL, 'Pedro'), (NULL, 'Jose'), (NULL, 'Martina'), (NULL, 'Agustina');