<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operaciones</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      padding: 2rem 0;
      margin: 0;
      box-sizing: border-box;
      display: flex;
      justify-content: center;
      color: #fff;
      background-color: #000;
    }
  </style>
</head>

<body>
  <?php
  $n1 = 50;
  $n2 = 20;

  echo "Los numeros ingresados son: $n1 y $n2 <br><br>";
  $resultado = $n1 + $n2;
  echo "La suma es: $resultado <br>";
  $resultado = $n1 - $n2;
  echo "La resta es: $resultado <br>";
  $resultado = $n1 * $n2;
  echo "La multiplicacion es: $resultado <br>";
  $resultado = $n1 / $n2;
  echo "La division es: $resultado <br>";
  $resultado = $n1 % $n2;
  echo "El residuo es: $resultado <br>";
  $resultado = $n1 ** 2;
  echo "La potencia es: $resultado <br>";
  ?>
</body>

</html>