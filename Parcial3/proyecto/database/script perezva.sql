CREATE DATABASE IF NOT EXISTS perezva;
USE perezva;
CREATE TABLE USUARIOS
(
    ID_USUARIO INT PRIMARY KEY AUTO_INCREMENT,
    USER VARCHAR(25) NOT NULL,
    CONTRASENA VARCHAR(50) NOT NULL
);

INSERT INTO USUARIOS (USER,CONTRASENA) VALUES ('gabriela','perez');