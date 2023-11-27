<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <?php
        //vector escalar
        $clientes = ['Bryan', 'Pierina', 'Astrid', 'Leonela', 'Luciana', 'Jazmin', 'Tony', 'Samuel', 'Jose'];

        //echo $clientes[2] . "<br>";
        
        $frutas = [];

        $frutas[1] = 'pera';
        $frutas[2] = 'manzana';
        $frutas[3] = 'platano';

        // echo $frutas[3]. "<br>";
        
        //cambiar valor en el array cliente
        $clientes[4] = 'Maria';

        //borrar elemento en el array cliente
        unset($clientes[6]);

        for ($x = 0; $x < count($clientes); $x++) {
            echo $x . " " . $clientes[$x] . "<br>";
        }



        ?>
    </div>
</body>

</html>