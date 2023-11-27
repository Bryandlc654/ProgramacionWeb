<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
    }
  </style>
</head>

<body>
  <?php
  $dia = 24; //Se declara una variable de tipo integer.
  $sueldo = 758.43; //Se declara una variable de tipo double.
  $nombre = "Juan"; //Se declara una variable de tipo string.
  $exite = true; //Se declara una variable boolean.
  
  echo "Variable entera: ";
  echo $dia;
  echo "<br>";
  echo "Variable double: ";
  echo $sueldo;
  echo "<br>";
  echo "Variable string: ";
  echo $nombre;
  echo "<br>";
  echo "Variable boolean: ";
  echo $exite;
  ?>
</body>

</html>