<?php
include './conexion.php';

$cod = '';
$nombre = '';
$apellidos = '';
$fecha = '';
$edad = '';
$flag = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cod = isset($_POST['id']) ? $_POST['id'] : '';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : '';
    $edad = isset($_POST['edad']) ? $_POST['edad'] : '';
    $flag = isset($_POST['flag']) ? $_POST['flag'] : '';
}

if (isset($_POST['operaciones'])) {
    if ($_POST['operaciones'] == 'Edad') {
        $fentero = strtotime($fecha);
        $anio = date("Y", $fentero);
        $edad = date("Y") - $anio;
    }
    if ($_POST['operaciones'] == 'Buscar') {
        if ($conexion) {
            $consulta = $conexion->query("SELECT * FROM Trabajadores WHERE IdTrabajador='$cod'");

            if ($datos = $consulta->fetch_assoc()) {
                $cod = $datos['IdTrabajador'];
                $nombre = $datos['Nombres'];
                $apellidos = $datos['Apellidos'];
                $fecha = $datos['FechaNac'];
                $flag = $datos['Flag'];
                $edad = $datos['Edad'];
            }
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Limpiar') {
        $cod = '';
        $nombre = '';
        $apellidos = '';
        $fecha = '';
        $edad = '';
        $flag = '';
    }
    if ($_POST['operaciones'] == 'Nuevo') {
        if ($conexion) {
            $consulta = $conexion->query("SELECT MAX(IdTrabajador) AS maxId FROM Trabajadores");

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
    if ($_POST['operaciones'] == 'Grabar') {
        if ($conexion) {
            $flag = 1;
            $consulta = $conexion->query("INSERT INTO Trabajadores(IdTrabajador,Nombres,Apellidos,FechaNac,Flag,Edad) VALUES('$cod','$nombre','$apellidos','$fecha',$flag,$edad)");
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'Editar') {
        if ($conexion) {
            $consulta = $conexion->query("UPDATE Trabajadores set Nombres='$nombre',Apellidos='$apellidos',FechaNac='$fecha',Edad='$edad',Flag='$flag' where IdTrabajador='$cod'");
        }
        $conexion->close();
    }
    if ($_POST['operaciones'] == 'X') {
        if ($conexion) {
            $consulta = $conexion->query("UPDATE Trabajadores set Nombres='$nombre',Apellidos='$apellidos',FechaNac='$fecha',Edad='$edad',Flag=0 where IdTrabajador='$cod'");
        }
        $conexion->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark">
    <div class="d-flex p-4 justify-content-center">
        <form method="post" class="card p-5" style="width:80rem;">
            <div class="mb-3">
                <label class="form-label">Codigo</label>
                <input type="text" class="form-control" name="id" value="<?php echo $cod ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $nombre ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de Naciminento</label>
                <input type="date" class="form-control" name="fecha" value="<?php echo $fecha ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" value="<?php echo $edad ?>">
                <input type="submit" class="btn btn-danger" value="Edad" name="operaciones"></input>

            </div>

            <div class="d-flex gap-3 flex-wrap justify-content-between">
                <input type="submit" class="btn btn-primary" value="Limpiar" name="operaciones"></input>
                <input type="submit" class="btn btn-primary" value="Nuevo" name="operaciones"></input>
                <input type="submit" class="btn btn-primary" value="Grabar" name="operaciones"></input>
                <input type="submit" class="btn btn-primary" value="Buscar" name="operaciones"></input>
                <input type="submit" class="btn btn-primary" value="Editar" name="operaciones"></input>
                <input type="submit" class="btn btn-danger" value="X" name="operaciones"></input>

            </div>
        </form>
    </div>

    <table class="table" style="width:80rem; margin:0 auto">
        <thead>
            <tr>
                <th scope="col">Nro</th>
                <th scope="col">Nombres y Apellidos</th>
                <th scope="col">Fecha Naciminento</th>
                <th scope="col">Edad</th>
                <th scope="col">Observacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_POST['operaciones'])) {
                if ($_POST['operaciones'] == 'Todos') {
                    $consulta = "SELECT * FROM Trabajadores";
                    if ($edad >= 18) {
                        $validacionEdad = "Mayor de edad";
                    } else {
                        $validacionEdad = "Menor de edad";
                    }
                    if ($resultado = $conexion->query($consulta)) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo ' 
                <tr>
                <td>' . $fila['IdTrabajador'] . '</td>
                <td>' . $fila['Nombres'] . " " . $fila['Apellidos'] . ' </td>
                <td> ' . $fila['FechaNac'] . ' </td>
                <td> ' . $fila['Edad'] . ' </td>
                <td> ' . $validacionEdad . ' </td>
                </tr>
                ';
                        }
                    } else {
                        echo "no esta";
                    }
                    $conexion->close();
                }
                if ($_POST['operaciones'] == 'Inactivos') {
                    $consulta = "SELECT * FROM Trabajadores where Flag=0";
                    if ($edad >= 18) {
                        $validacionEdad = "Mayor de edad";
                    } else {
                        $validacionEdad = "Menor de edad";
                    }
                    if ($resultado = $conexion->query($consulta)) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo ' 
                <tr>
                <td>' . $fila['IdTrabajador'] . '</td>
                <td>' . $fila['Nombres'] . " " . $fila['Apellidos'] . ' </td>
                <td> ' . $fila['FechaNac'] . ' </td>
                <td> ' . $fila['Edad'] . ' </td>
                <td> ' . $validacionEdad . ' </td>
                </tr>
                ';
                        }
                    } else {
                        echo "no esta";
                    }
                    $conexion->close();
                }
                if ($_POST['operaciones'] == 'Activos') {
                    $consulta = "SELECT * FROM Trabajadores where Flag=1";
                    if ($edad >= 18) {
                        $validacionEdad = "Mayor de edad";
                    } else {
                        $validacionEdad = "Menor de edad";
                    }
                    if ($resultado = $conexion->query($consulta)) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo ' 
                <tr>
                <td>' . $fila['IdTrabajador'] . '</td>
                <td>' . $fila['Nombres'] . " " . $fila['Apellidos'] . ' </td>
                <td> ' . $fila['FechaNac'] . ' </td>
                <td> ' . $fila['Edad'] . ' </td>
                <td> ' . $validacionEdad . ' </td>
                </tr>
                ';
                        }
                    } else {
                        echo "no esta";
                    }
                    $conexion->close();
                }
            }
            ?>
        </tbody>
    </table>
    <br>
    <form method="post">
        <div class="d-flex gap-3 flex-wrap ">
            <input type="submit" class="btn btn-success" value="Activos" name="operaciones"></input>
            <input type="submit" class="btn btn-danger" value="Inactivos" name="operaciones"></input>
            <input type="submit" class="btn btn-danger" value="Todos" name="operaciones"></input>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>