<?php

    include 'conexion.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM materiass where id = ".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: consultarMaterias.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='consultarMaterias.php'>Regresar a alumnos</a></h3>";
        $conexion->close();
    }

?>