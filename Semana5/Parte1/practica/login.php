<?php
require_once 'usuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Buscar usuario en el array
    $usuarioEncontrado = null;
    foreach ($usuarios as $u) {
        if ($u['Usuario'] == $usuario && $u['Contraseña'] == $contrasena) {
            $usuarioEncontrado = $u;
            break;
        }
    }

    if ($usuarioEncontrado) {
        // Iniciar sesión y redirigir a inicio.php
        session_start();
        $_SESSION['usuario'] = $usuarioEncontrado;
        header("Location: inicio.php");
        exit();
    } else {
        $mensaje = "Usuario o contraseña incorrectos. Debes registrarte.";
    }
}
?>


<!doctype html>
<html class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>

<body class="h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto"
                src="https://es.freelogodesign.org/assets/img/logo-colors-meanings/logos-violets/logo-yahoo.svg"
                alt="Yahoo">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Iniciar Sesión</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-6 mb-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Usuario</label>
                    <div class="mt-2">
                        <input id="usuario" name="usuario" type="text" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                    <div class="mt-2">
                        <input id="contrasena" name="contrasena" type="text" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ingresar</button>
                </div>
            </form>
            <?php if (isset($mensaje)): ?>
                <p class="text-red-500 text-center">
                    <?php echo $mensaje; ?>
                </p>
            <?php endif; ?>
            <span>¿No tienes una cuenta? <a href="registrarme.php"
                    class="mt-2 text-sm font-medium leading-6 text-gray-500">Registrate aquí</a>
            </span>
        </div>
    </div>
</body>

</html>