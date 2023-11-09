<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Registrar Alumno</h2><hr>
                <form action="GuardarRegistro.php" method="POST">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno" required>
                    </div>
                   
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input name="semestre" type="number" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <select name="turno" class="form-control" required>
                            <option value="">Selecciona el turno</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                        </select>
                    </div>
                  <br>
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
