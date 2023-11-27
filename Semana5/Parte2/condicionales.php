<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">

    <?php
    /*Determinar el genero de una persona por el valor de ingreso */
    $genero = "M";
    switch ($genero) {
        case "M":
            echo "Masculino";
            break;
        case "F":
            echo "Femenino";
            break;
        default:
            echo "No especificado";
    }
    ?>

</body>

</html>