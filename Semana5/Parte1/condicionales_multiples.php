<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">

    <?php
    $estado = "f";

    if ($estado == "s") {
        echo "Estado: Soltero";
    } else {
        if ($estado == "c") {
            echo "Estado: Casado";
        } else {
            if ($estado == "v") {
                echo "Estado: Viudo";
            } else {
                if ($estado == "d") {
                    echo "Estado: Divorciado";
                } else{
                    echo "Estado: No corresponde";
                }
            }
        }
    }
    ?>

</body>

</html>