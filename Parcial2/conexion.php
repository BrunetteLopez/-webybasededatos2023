<?php

    $server = "localhost";
    $user = "root";
    $password ="";
    
    $conexion = new mysqli($server, $user, $password);

    if($conexion->connect_error){
        die("Fallo la conexión". $coneccion)
    }


?>