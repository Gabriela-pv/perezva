<?php
 $server='localhost';
 $username='root';
 $password='';
 $database='perezva';

 try {

     $conn= new PDO("mysql:host=$server;dbname=$database", $username, $password);
     //echo ("conectado");

 } catch (PDOException $e) {
     echo "¡Error, No se pudo conectar la base de datos!: " . $e->getMessage() . "<br/>";
     die();
 }
?>