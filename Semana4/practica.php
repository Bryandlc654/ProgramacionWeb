<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-4" style="width: 25rem;">
            <form action='' method='post'>
                <h2 class="text-center">Iniciar Sesión</h2>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Ingresar Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Ingresar Contraseña</label>
                    <input type="text" class="form-control" name="contrasena" id="contraseña">
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar">
            </form>
        </div>
    </div>
    <?php
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if (isset($_POST['ingresar'])) {
        if ($usuario == "Bryan" && $contrasena == "05041999") {
            echo "<script>alert('Bienvenido')</script>";
        } else {
            echo "<script>alert('Denegado')</script>";
        }
    }
    ?>

</body>

</html>