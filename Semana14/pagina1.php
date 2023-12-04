<?php
session_start();
$_SESSION['minombre'] = 'Bryan';
$_SESSION['apellidos'] = 'De la cruz';

if (isset($_POST['opcion'])) {
    if (($_POST('opcion') == 'Ingresar')) { {
            echo header('location:pagina2.php');
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark ">
    <div class="d-flex p-4 justify-content-center align-items-center flex-column" style="height:100vh;">
        <h1 class="text-light mb-3">Iniciar sesión</h1>
        <form method="post" action="pagina2.php" class="card p-5" style="width:40rem;">
            <div class="mb-3">
                <label class="form-label">Codigo</label>
                <input type="text" class="form-control" name="id">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">
            </div>
            <div class="d-flex gap-3 flex-wrap justify-content-between">
                <button type="submit" class="btn btn-primary" name="opcion" value="ingresar">Ingresar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>