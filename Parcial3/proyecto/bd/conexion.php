<?php
//php PDO
class Conexion{
    //clase conexion, se define un metodo dentro de la clase
    public static function Conectar(){
        //define('servidor','localhost');
        //define('nombre_bd','perezva');
        define('usuario','root');
        define('password','');
        $dsn = 'mysql:host=localhost;dbname=perezva';
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

        try{
            $conexion = new PDO($dsn, usuario, password, $opciones);
            //new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
            //$cn = new PDO("mysql:host=localhost;dbname=prueba", "usuario", "password");
           //($dsn, $username = null, $password = null, $options = null)
            return $conexion;
        }catch(Exception $e){
            die("El error de conexión es:".$e->getMessage());
        }



    }
}
?>