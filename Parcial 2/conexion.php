<?php

$server = "localhost";
$user = "roat";
$password = "";

$conexion = new mysqli($server, $user, $password);

if($conexion->conect_error){
    die("Falló la conexión".$conexion->conect_error)
}
?>




















