<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$direccion = $_POST['direccion'];
$nivel = $_POST['nivel'];
$Login = $_POST['Login'];
$Contrasena = $_POST['Contrasena'];
$Activo = $_POST['Activo'];
$Flag = $_POST['Flag'];
$conexion = mysqli_connect("154.49.247.103:3306", "u560058480_admin", "ch-R2#ER+8euE7P", "u560058480_programacion");

$sql = "INSERT INTO Empleados(Nombres,Apellidos,Direccion,Nivel) values('$nombres','$apellidos','$direccion','$nivel')";
$sql2 = "INSERT INTO usuarios(Loggin,Contrasena,Activo,Flag) values('$Login','$Contrasena','$Activo','$Flag')";

if ($conexion->query($sql)) {
    if ($conexion->query($sql2)) {
        echo "Datos grabados correctamente";
    } else {
        echo "Error al registrar";
    }
} else {
    echo "Error al registrar";
}

$conexion->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="py-2">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card mt-8 p-4" style="width: 25rem;">
            <form action='' method='post'>
                <h2 class="text-center">Registrar</h2>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombres">
                </div>
                <div class="mb-3">
                    <label for="apellidos" class=" form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos">
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccion">
                </div>
                <div class="mb-3">
                    <label for="nivel" class="form-label">Nivel</label>
                    <input type="text" class="form-control" name="nivel">
                </div>
                <div class="mb-3">
                    <label for="Login" class="form-label">Login</label>
                    <input type="text" class="form-control" name="Login">
                </div>
                <div class="mb-3">
                    <label for="Contrasena" class="form-label">Contrasena</label>
                    <input type="text" class="form-control" name="Contrasena">
                </div>
                <div class="mb-3">
                    <label for="Activo" class="form-label">Activo</label>
                    <input type="text" class="form-control" name="Activo">
                </div>
                <div class="mb-3">
                    <label for="Flag" class="form-label">Flag</label>
                    <input type="text" class="form-control" name="Flag">
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" value="Registrar" name="registrar">
            </form>
        </div>
    </div>
</body>

</html>