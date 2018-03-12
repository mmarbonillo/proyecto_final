DROP DATABASE IF EXISTS tienda;
CREATE DATABASE tienda CHARACTER SET utf8mb4;
USE tienda;

CREATE TABLE usuario (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(128) NOT NULL,
  nombre VARCHAR(128) NOT NULL
);

CREATE TABLE fabricante (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE producto (
  codigo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio DOUBLE NOT NULL,
  codigo_fabricante INT UNSIGNED NOT NULL,
  imagen VARCHAR(256),
  descripcion VARCHAR(512),
  FOREIGN KEY (codigo_fabricante) REFERENCES fabricante(codigo)
);

INSERT INTO usuario VALUES (1, 'usuario@usuario.es', 'f8032d5cae3de20fcec887f395ec9a6a', 'Usuario');
INSERT INTO usuario VALUES (2, 'maria@usuario.es', '263bce650e68ab4e23f28263760b9fa5', 'Maria');


insert into fabricante(nombre) values('logitec');
insert into fabricante(nombre) values('HP');
insert into fabricante(nombre) values('ACER');
insert into fabricante(nombre) values('Lenovo');
insert into fabricante(nombre) values('Apple');
insert into fabricante(nombre) values('MSI');


insert into producto(nombre, precio, codigo_fabricante) values('Raton Logitech', '9.99', '1');
insert into producto(nombre, precio, codigo_fabricante) values('Portatil HP', '599.99', '2');
insert into producto(nombre, precio, codigo_fabricante) values('Sobremesa ACER', '399.99', '3');
insert into producto(nombre, precio, codigo_fabricante) values('Teclado Lenovo', '14.99', '4');
insert into producto(nombre, precio, codigo_fabricante) values('Auriculares Apple', '19.99', '5');
insert into producto(nombre, precio, codigo_fabricante) values('GTX 960', '299.99', '6');

