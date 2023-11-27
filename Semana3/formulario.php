<?php
$n1 = (float)$_POST['num1'];
$n2 = (float)$_POST['num2'];
$res = '';

if (isset($_POST['operaciones'])) {
    if ($_POST['operaciones'] == 'Sumar') {
        $res = $n1 + $n2;
    }
    if ($_POST['operaciones'] == 'Restar') {
        $res = $n1 - $n2;
    }
    if ($_POST['operaciones'] == 'Multiplicar') {
        $res = $n1 * $n2;
    }
    if ($_POST['operaciones'] == 'Dividir') {
        $res = $n1 / $n2;
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formualrio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-4" style="width: 25rem;">
            <form action='' method='post'>
                <h2 class="text-center">Calculadora</h2>
                <div class="mb-3">
                    <label for="num1" class="form-label">Ingresar número 1</label>
                    <input type="text" class="form-control" name="num1" id="num1" value='<?php echo $n1 ?>'>
                </div>
                <div class="mb-3">
                    <label for="num2" class="form-label">Ingresar número 2</label>
                    <input type="text" class="form-control" name="num2" id="num2" value='<?php echo $n2 ?>'>
                </div>
                <hr>
                <div class="mb-3">
                    <label for="resultado" class="form-label">Resultado</label>
                    <input type="text" class="form-control" name="resultado" id="resultado" value='<?php echo $res ?>'>
                </div>
                <input type="submit" class="btn btn-primary" value="Sumar" name="operaciones">
                <input type="submit" class="btn btn-primary" value="Restar" name="operaciones">
                <input type="submit" class="btn btn-primary" value="Multiplicar" name="operaciones">
                <input type="submit" class="btn btn-primary" value="Dividir" name="operaciones">
            </form>
        </div>
    </div>
</body>

</html>