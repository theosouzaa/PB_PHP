CREATE DATABASE MVC_biblioteca;
USE MVC_biblioteca;
DROP DATABASE mvc_biblioteca;

CREATE TABLE livros(
	ID INTEGER AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    autor VARCHAR(255),
    genero VARCHAR(255)
);

SELECT * FROM livros;