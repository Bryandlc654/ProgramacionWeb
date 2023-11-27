<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <?php

        $clientes = [
            'codigo' => 'CL01',
            'nombre' => 'Juan',
            'apellido' => 'Perez',
        ];
        var_dump($clientes); //imprime la datos de la matriz
        ?>
    </div>
</body>

</html>

<!-- 
cuadro comparativo de  diferentes metodos de imprimir datos
Diferencia de echo print print_r print_f var_dump

conceto
comparacion 
ejemplo ejercicio
 -->