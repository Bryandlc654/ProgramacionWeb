<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$conexion = mysqli_connect("154.49.247.103:3306", "u560058480_admin", "ch-R2#ER+8euE7P", "u560058480_programacion");


if ($conexion) {
  if (empty($usuario) and empty($contrasena)) {
    echo "<script>alert('Debes ingresar datos para acceder')</script>";
  } else {
    $consulta = $conexion->query("SELECT * FROM usuarios WHERE Login = '$usuario' AND Contrasena = '$contrasena'");
    if ($datos = $consulta->fetch_assoc()) {
      echo $datos['Idusuario'] . " " . $datos['Login'] . " " . $datos['Contrasena'];
      if ($datos['Activo'] == 's') {
        echo "<script>alert('Bienvenido')</script>";
        if ($datos['Flag'] == 'n') {
          echo "<script>alert('Acceso concecido')</script>";
        } else {
          echo "<script>alert('No puedes iniciar sesion')</script>";
        }
      } else {
        echo "<script>alert('Lo sentimos ya no trabajas con nosotros')</script>";
      }
    } else {
      echo 'Usuario no registrado';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <section class="section">
    <div class="card" id="loginCard">
      <form action="" method="post">
        <h2>Iniciar Sesión</h2>
        <input type="text" placeholder="Usuario" name="usuario" />
        <input type="text" placeholder="Contraseña" name="contrasena" />
        <button type="submit" class="button-login" name="ingresar">Ingresar</button>
      </form>
    </div>
    <div class="card" id="registerCard" style="display: none">
      <form action="">
        <h2>Regístrate</h2>
        <input type="text" placeholder="Nombres" />
        <input type="text" placeholder="Apellidos" />
        <input type="text" placeholder="Usuario" />
        <input type="text" placeholder="Contraseña" />
        <button class="button-registrar">Registrar</button>
      </form>
    </div>
    <div class="card_btnregister" id="btnRegisterContainer">
      <h4>¿Aún no tienes una cuenta?</h4>
      <p>Registrarme para acceder</p>
      <a href="#" class="btnregister" id="btnregister">Registrarme</a>
    </div>
    <div class="card_btnregister" id="btnLoginContainer" style="display: none">
      <h4>¿Ya tienes una cuenta?</h4>
      <p>Inicia sesión para acceder</p>
      <a href="#" class="btnlogin" id="btnlogin">Iniciar sesión</a>
    </div>
  </section>
  <script src="./js/script.js"></script>

</body>

</html>