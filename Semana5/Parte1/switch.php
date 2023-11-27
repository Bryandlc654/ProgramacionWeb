<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">

    <?php
    $valor = 1;
    switch ($valor) {
        case 0:
            echo "Numero 0";
            break;
        case 1:
            echo "Numero 1";
            break;
        case 2:
            echo "Numero 2";
            break;

    }

    ?>

</body>

</html>