<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Registrarme</h2>
            <?php if (isset($mensaje)): ?>
                <p class="mt-2 text-lg leading-8 text-red-600">
                    <?php echo $mensaje; ?>
                </p>
            <?php else: ?>
                <p class="mt-2 text-lg leading-8 text-gray-600">Completa todos los datos</p>
            <?php endif; ?>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"
            class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="usuario" class="block text-sm font-semibold leading-6 text-gray-900">Usuario</label>
                    <div class="mt-2.5">
                        <input type="text" name="usuario" id="usuario"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="contrasena"
                        class="block text-sm font-semibold leading-6 text-gray-900">Contraseña</label>
                    <div class="mt-2.5">
                        <input type="text" name="contrasena" id="contrasena"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit"
                    class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
            </div>
        </form>
    </div>

</body>

</html>

<?php
session_start();
require_once 'usuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verifica si el usuario ya existe
    foreach ($usuarios as $u) {
        if ($u['Usuario'] == $usuario) {
            $mensaje = "¡El usuario ya existe! Por favor, elige otro.";
            break;
        }
    }

    // Si el usuario no existe, agregarlo al array
    if (!isset($mensaje)) {
        $usuarios[] = array(
            'id' => 'u' . (count($usuarios) + 1),
            'Usuario' => $usuario,
            'Contraseña' => $contrasena
        );
        echo '<script>console.log("' . $usuarios . '");</script>';
        exit();
    }

}
?>