<?php
include './conexion.php';

$cod = '';
$nombre = '';
$precio = '';
$presentacion = '';
$fecha = '';
$marca = '';
$categoria = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cod = isset($_POST['id']) ? $_POST['id'] : '';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $precio = isset($_POST['precio']) ? $_POST['precio'] : '';
    $presentacion = isset($_POST['presentacion']) ? $_POST['presentacion'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $marca = isset($_POST['marca']) ? $_POST['marca'] : '';
    $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : '';
}

if (isset($_POST['operaciones'])) {
    if ($_POST['operaciones'] == 'Buscar') {
        if ($conexion) {
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
            echo "<script>alert('Producto Eliminado')</script>";
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Guardar') {
        if ($conexion) {
            $consulta = $conexion->query("INSERT INTO Productos values (IdProducto, NombreProducto,Precio,Presentacion,FVencimiento,Marca, IdCategoria");
            echo "<script>alert('Producto Agregado')</script>";
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Actualizar') {
        if ($conexion) {
            $consulta = $conexion->query("UPDATE Productos set NombreProducto='$nombre', Precio='$precio', Presentacion='$presentacion', FVencimiento='$fecha', Marca='$marca', IdCategoria='$categoria' where IdProducto='$cod'");
            echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Crud</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                Producto Actualizado
              </div>
            </div>';
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Nuevo') {
        if ($conexion) {
            $consulta = $conexion->query("SELECT MAX(IdProducto) AS maxId FROM Productos");

            if ($consulta) {
                $resultado = $consulta->fetch_assoc();
                if ($resultado) {
                    $maxId = $resultado['maxId'];
                    $nuevoId = $maxId + 1;
                    $cod = $nuevoId;
                }
            }
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Limpiar') {
        $cod = '';
        $nombre = '';
        $precio = '';
        $presentacion = '';
        $fecha = '';
        $marca = '';
        $categoria = '';
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark">
    <div class="d-flex p-4 justify-content-center">
        <form method="post" class="card p-5" style="width:30rem;">
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
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?php echo $categoria ?>">
            </div>
            <div class="d-flex gap-3 flex-wrap justify-content-between">
                <input type="submit" class="btn btn-primary" value="Buscar" name="operaciones"></input>
                <input type="submit" class="btn btn-danger" value="Eliminar" name="operaciones"></input>
                <input type="submit" class="btn btn-success" value="Actualizar" name="operaciones"></input>
                <input type="submit" class="btn btn-success" value="Nuevo" id="liveToastBtn" name="operaciones"></input>
                <input type="submit" class="btn btn-success" value="Guardar" name="operaciones"></input>
                <input type="submit" class="btn btn-dark" value="Limpiar" name="operaciones"></input>
            </div>
        </form>
    </div>
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">CRUD</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Id encontrado:
                <?php echo $cod ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js/alert.js"></script>
</body>

</html>