<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos bidimensionales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <?php
        $datos = [
            'codigo' => 'CL01',
            'nombre' => 'Juan',
            'apellido' => 'Perez',
        ];
        //var_dump($datos); //imprime la datos de la matriz
        echo '<br>';
        /*    echo $datos['codigo'] . '<br>';
           echo $datos['nombre'] . '<br>';
           echo $datos['apellido'] . '<br>'; */

        $productos = array(
            array('Codigo' => 'P01', 'Descripcion' => 'Azúcar Rubia', 'precio' => '3.8'),
            array('Codigo' => 'P02', 'Descripcion' => 'Arroz Costeño', 'precio' => '2.9'),
            array('Codigo' => 'P03', 'Descripcion' => 'Leche', 'precio' => '3.5'),
            array('Codigo' => 'P04', 'Descripcion' => 'Mayonesa', 'precio' => '3.8'),
        );
        foreach ($productos as $item) {
            echo $item['Codigo'] . ' ' . $item['Descripcion'] . ' ' . $item['precio'] . '<br>';
        }


        ?>
    </div>
</body>

</html>