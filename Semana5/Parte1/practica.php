<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales Simples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white p-2">

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-4" style="width: 25rem;">
            <form action='' method='post'>
                <h2 class="text-center">Categorias</h2>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Elige una categoria</label>
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="vacio">Seleccione una categoria</option>
                        <option value="lacteos">Lacteos</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="conservas">Conservas</option>
                        <option value="cereales">Cereales</option>
                    </select>
                </div>
                <hr>
                <input type="submit" class="btn btn-primary" value="Elegir" name="elegir">
            </form>
        </div>
    </div>

    <?php
    $productos = $_POST['categoria'];

    switch ($productos) {
        case 'vacio':
            echo "No seleccionaste ninguna categoria";
            break;
        case 'lacteos':
            $lacteos = ['Queso guda', 'Yogurt Griego', 'Leche evaporada', 'Queso Parmesano', 'Mantequilla'];
            for ($x = 0; $x < count($lacteos); $x++) {
                echo $lacteos[$x] . "<br>";
            }
            break;
        case 'bebidas':
            $bebidas = ['Coca Cola', 'Fanta', 'Sprite', 'Agua', 'Vino', 'Cerveza'];
            for ($x = 0; $x < count($bebidas); $x++) {
                echo $bebidas[$x] . "<br>";
            }
            break;
        case 'conservas':
            $conservas = ['Atun', 'Durazno', 'Pera', 'Papaya', 'Yogurt', 'Cacao', 'Vino', 'Cerveza'];
            for ($x = 0; $x < count($conservas); $x++) {
                echo $conservas[$x] . "<br>";
            }
            break;
        case 'cereales':
            $cereales = ['Maíz', 'Arroz', 'Huevos', 'Carne', 'Pollo', 'Pescado', 'Aceite', 'Café', 'Cereal', 'Azucar'];
            for ($x = 0; $x < count($cereales); $x++) {
                echo $cereales[$x] . "<br>";
            }
            break;
    }

    ?>
</body>

</html>