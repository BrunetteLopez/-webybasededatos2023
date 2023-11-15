<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Materias</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
<?php
 include 'menu,php';
 include 'conexion.php';
 $sql_alumnos = "SELECT * FORM alumnos";
 $sql_alumnos = "SELECT * FORM materias";
 $datos = $conexion->query($sql_alumnos);
$datos_alumnos = $conexion->query($sql_materias);
  ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card p-4 m-2">
                <h1>Asignar Materias a un alumno </h1>
                <form action="guardarAignación.php" method="POST">
                    <label for="">Alumno:</label>
                    <select name="alumno" class="form-control">
                        <option value="">Selecciona a un alumno:</option>
                <?php if($datos_alumnos->num_rows > 0){
                    while($registro = $datos->fetch_assoc()){
               } }?>  
                </select
              </form>
            </div>
        </div>
    </div>


<footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>