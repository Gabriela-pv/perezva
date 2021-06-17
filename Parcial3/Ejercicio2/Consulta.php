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

    $sql="SELECT * FROM LIBROS";
    $resultado=$conn->prepare($sql);
    $resultado->execute();
    $data=$resultado->FetchAll(PDO::FETCH_ASSOC);
	


    foreach($data as $registro){
        echo $registro['ID_LIBRO'].' - '.
            $registro['ISBN'].' - '.
            $registro['TITULO'].' - '.
            $registro['AUTOR'].' - '.
            $registro['PUBLICACION'].' - '.
            $registro['PAGINAS'].' - '.
            $registro['EDICION'].'<br>';
    }