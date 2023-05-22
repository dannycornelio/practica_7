<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>RRHH de la escuela</title>
</head>
<style>
    h1{
        background-color: #2ecc71;
        text-align: center;
        font-size: x-large;
        font-family: Arial, Helvetica, sans-serif;
        padding: 5px;
        border-radius: 5px;
        }

</style>
<body>
    <h1 class="display-3">ESCUALE DE INFORMATICA Y TECNOLOGIA</h1>
    <div class="container">
        <h3 class="text-center">Formulario de informacion del alumnos</h3>
        <div class="row justify-content-center">
            <form action="/practica_7/controladores/datos/alumnos.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="codigo">Codigo del alumno</label>
                        <input type="number" name="codigo" id="codigo" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="primer_nombre">Primer nombre del estudiante</label>
                        <input type="text" name="primer_nombre" id="primer_nombre" class="form-control" required>
                    </div>
                    <div class="col-6">
                        <label for="segundo_nombre">Segundo nombre del estudiante</label>
                        <input type="text" name="segundo_nombre" id="segundo_nombre" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="primer_apellido">Primer apellido del estudiante</label>
                        <input type="text" name="primer_apellido" id="primer_apellido" class="form-control" required>
                    </div>
                  <div class="col-6">
                        <label for="segundo_apellido">Segundo apellido del estudiante</label>
                        <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email">Correo electronico</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="telefono">Numero de telefono</label>
                        <input type="number" name="telefono" id="telefono" class="form-control"required>
                    </div>
                    <div class="col-6">
                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-outline-success w-100">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>