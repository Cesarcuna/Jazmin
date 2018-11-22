DROP DATABASE IF EXISTS ferreteria;
CREATE DATABASE ferreteria;
USE ferreteria;

CREATE TABLE  articulos (
  id_articulo INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  nombre TEXT,
  precio TEXT,
  cantidad TEXT,
  marca TEXT);

CREATE TABLE  tipoUsuarios (
  id_tipoUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  nombre TEXT);

CREATE TABLE  usuarios (
  id_usuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  nombre TEXT,
  usuario TEXT,
  contrasena TEXT,
  tipo INT,
  INDEX (tipo), FOREIGN KEY (tipo) REFERENCES tipoUsuarios(id_tipoUsuario));

INSERT INTO tipoUsu
arios VALUES (null, 'Administrador');
INSERT INTO tipoUsuarios VALUES (null, 'Cajero');

INSERT INTO usuarios VALUES (null, 'Cesar', 'admin','12345',1);
INSERT INTO usuarios VALUES (null, 'Eduardo', 'cajero12','12345',2);

//kevinjaramillo@upp.edu.mx