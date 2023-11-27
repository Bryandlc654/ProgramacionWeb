<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<?php
include 'conec.php';

$cod = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$presentacion = $_POST['presentacion'];
$fecha = $_POST['fecha'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];


if (isset($_POST['operaciones'])) {
    if ($_POST['operaciones'] == 'Buscar') {
        if ($conexion) {
            echo "Conexion exitosa";
            $consulta = $conexion->query("SELECT * FROM Productos WHERE IdProducto='$cod'");

            if ($datos = $consulta->fetch_assoc()) {
                $cod = $datos['IdProducto'];
                $nombre = $datos['NombreProducto'];
                $precio = $datos['Precio'];
                $presentacion = $datos['Presentacion'];
                $fecha = $datos['FVencimiento'];
                $marca = $datos['Marca'];
                $categoria = $datos['IdCategoria'];
            }
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Eliminar') {
        if ($conexion) {
            $consulta = $conexion->query("DELETE FROM Productos WHERE IdProducto='$cod'");
            echo "Producto eliminado";
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Actualizar') {
        if ($conexion) {
            $consulta = $conexion->query("UPDATE Productos set NombreProducto='$nombre', Precio='$precio', Presentacion='$presentacion', FVencimiento='$fecha', Marca='$marca', IdCategoria='$categoria' where IdProducto='$cod'");
            echo "Producto Actualizado";
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Nuevo') {
        if ($conexion) {
            $consulta = $conexion->query("SELECT * from Productos ORDER BY IdProducto DESC LIMIT 1");
            echo $consulta;
        }
        $conexion->close();
    }


}
?>

<body class="p-2">
    <div class="d-flex">
        <form method="post" class="card p-4" style="width: 43rem;">
            <div class="mb-3">
                <label class="form-label">Id</label>
                <input type="text" class="form-control" name="id" value="<?php echo $cod ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Producto</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $precio ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Presentacion</label>
                <input type="text" class="form-control" name="presentacion" value="<?php echo $presentacion ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de vencimiento</label>
                <input type="date" class="form-control" name="fecha" value="<?php echo $fecha ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" class="form-control" name="marca" value="<?php echo $marca ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Buscar" name="operaciones"></input>
                <input type="submit" class="btn btn-danger" value="Eliminar" name="operaciones"></input>
                <input type="submit" class="btn btn-success" value="Actualizar" name="operaciones"></input>
                <input type="submit" class="btn btn-success" value="Nuevo" name="operaciones"></input>
            </div>
        </form>
    </div>
</body>

</html>