<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//Recepcion de datos enviados mediante POST desde ajax 
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password); //se encripta la clave eenviada  por el usuario 

$consulta = "SELECT * FROM usuarios WHERE USER='$usuario' AND CONTRASENA='$pass' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;


}else{
    $_SESSION["s_usuario"] = null;
    $data = null;   

}

print json_encode($data);
$conexion = null;


?>