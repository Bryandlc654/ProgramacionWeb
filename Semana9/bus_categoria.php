<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="p-5">
    <form method="post" class="px-5">
        <div class="mb-3 d-flex ">
            <select name="busqueda" class="form-select">
                <option value="1">Lacteos</option>
                <option value="2">Menestras</option>
                <option value="3">Gasesosas</option>
                <option value="4">Cereales</option>
                <option value="5">Cervezas</option>
            </select>
            <button type="submit" class="btn btn-primary mx-2"><i class="bi bi-search"></i></button>
        </div>
    </form>
    <?php
    include "conec.php";
    $busqueda = $_POST['busqueda'];
    $consulta = "SELECT IdProducto, NombreProducto, Precio, FVencimiento from Productos where IdCategoria='$busqueda'";

    echo "<table class=\"table\">
    <thead>
    <tr>
        <td> IdProducto </td>
        <td> NomProducto </td>
        <td> Precio </td>
        <td> FechaVence </td>
        </tr>
    </thead>
        ";

    if ($resultado = $conexion->query($consulta)) {
        while ($fila = $resultado->fetch_assoc()) {
            echo ' 
        <tr>
        <th scope="row">' . $fila['IdProducto'] . '</th>  
        <td>' . $fila['NombreProducto'] . ' </td>
        <td>' . $fila['Precio'] . ' </td>
        <td> ' . $fila['FVencimiento'] . ' </td>
        </tr>
        ';
        }
    } else {
        echo "No está";
    }
    ?>

</body>

</html>