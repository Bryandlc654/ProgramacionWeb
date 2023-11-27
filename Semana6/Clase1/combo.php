

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
            <h3>Regiones y Provincias</h3>
            <form action="">
                <select name="region" id="region">
                    <?php
                    require_once ('datos.php');region();
                    ?>
                </select>

                <?php
                
                ?>
            </form>
        </div>
    </section>

</body>

</html>