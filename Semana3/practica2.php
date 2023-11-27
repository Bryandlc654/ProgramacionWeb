<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Nombres</title>
    <title>Arreglos bidimensionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">
    <h2>Registro de Nombres</h2>
    <div class="container d-flex py-5 align-items-center flex-column">

        <div class="card p-4" width="28rem">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>

                <input type="submit" class="btn btn-primary" value="Registrar">
            </form>
        </div>
        <br>
        <?php
        session_start();

        if (!isset($_SESSION['nombres'])) {
            $_SESSION['nombres'] = array();
        }

        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 0;
        }

        $registro_exitoso = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];

            $_SESSION['nombres'][] = $nombre;

            $_SESSION['contador']++;

            $registro_exitoso = true;
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($_SESSION['nombres'])) {
                    $indice = 1;
                    foreach ($_SESSION['nombres'] as $nombre) {
                        echo "<tr scope='row'>";
                        echo "<th>$indice</th>";
                        echo "<td>$nombre</td>";
                        $indice++;
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <?php
        if ($registro_exitoso) {
            echo "<p>Total de registros: " . $_SESSION['contador'] . "</p>";
        }
        ?>
    </div>
</body>

</html>