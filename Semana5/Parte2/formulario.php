<?php
$genero = $_POST['genero'];
$estado = $_POST['estado'];


switch ($genero) {
    case "M":
        $genero = "Masculino";
        break;
    case "F":
        $genero = "Femenino";
        break;
    default:
        $genero = "No especificado";
}

switch ($estado) {
    case "S":
        $estado = "Soltero";
        break;
    case "C":
        $estado = "Casado";
        break;
    case "V":
        $estado = "Viudo";
        break;
    case "D":
        $estado = "Divorciado";
        break;
    default:
        $estado = "No especificado";
}
$res = "El genero es: " . $genero . " y el estado civil es: " . $estado;


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Género</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-4" style="width: 25rem;">
            <form action='' method='post'>
                <h2 class="text-center">Formulario de Genero</h2>
                <div class="mb-3">
                    <label for="genero" class="form-label">Ingresar Genero</label>
                    <input type="text" class="form-control" name="genero">
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">Ingresar Estado Civil</label>
                    <input type="text" class="form-control" name="estado">
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar">
            </form>

            <p>
                <?php echo $res ?>
            </p>
        </div>
    </div>

</body>

</html>