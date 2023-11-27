<?php

$prod = ['arroz', 'azúcar', 'leche', 'fideos', 'atún'];

foreach ($prod as $key => $x) {
    echo "$x <br>";
}

?>

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
    <section>
        <div class="container">
            <select name="" id="">
                <option value="" selected>Selecciona una opcion</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
            </select>
        </div>
        <br>
        <div class="container">
            <h3>Cargando datos desde una matriz</h3>
            <select name="" id="">
                <?php
                $prod = ['arroz', 'azúcar', 'leche', 'fideos', 'atún'];
                foreach ($prod as $key => $x) {
                    echo "<option value='$x'>$x</option>";
                }

                ?>
            </select>
        </div>
    </section>

</body>

</html>