<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include  'menu.php'; ?>

    <div class="container">
        <div class="">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Teclea el nombre del alumno">
                </div>
                <div class="form-group">
                    <label for="">Númerio de control:</label>
                    <input type="number" name="nc" class="form-control" placeholder="Teclea el número de control">
                </div>
                <div class="form-group">
                    <label for="">Semestre:</label>
                    <input type="number" name="semestre" class="form-control" placeholder="Teclea el semestre">
                </div>
                <div class="form-group">
                    <label for="">Edad:</label>
                    <input type="number" name="edad" class="form-control" placeholder="Teclea la edad">
                </div>
                <div class="form-group">
                    <label for="">Turno:</label>
                    <select name="turno" class="form-control">
                        <option value="">Selecciona el turno</option>
                        <option value="MATUTINO">MATUTINO</option>
                        <option value="VESPERTINO">VESPERTINO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Sexo:</label>
                    <select name="turno" class="form-control">
                        <option value="">Selecciona el sexo</option>
                        <option value="0">FEMENINO</option>
                        <option value="1">MASCULINO</option>
                        <option value="2">Prefiero no responder</option>
                    </select>
                </div><br>
                <div>
                    <input type="submit" value="Registrar" class="btn btn-primary">
                    <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                </div>


            </form>
        </div>
    </div>
</body>
</html>