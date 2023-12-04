<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="d-flex p-4 justify-content-center">
        <h2>Hola como estás</h2>
        <form action="" method="">
            <div>
                <input type="text" name="txtnom" value="<?php echo $_SESSION['minombre'] . ' ' . $_SESSION['apellidos']; ?>" id="">
                <br><br>
                <input type="image" src="" alt="" value="Subir Imagen">
            </div>
        </form>
    </div>

</body>

</html>