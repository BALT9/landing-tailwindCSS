<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <section class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h1 class="text-2xl font-bold text-center mb-6">Registrarse</h1>
            <form action="/register" method="POST">
                <!-- Nombre -->
                <div class="mb-4">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <!-- Correo -->
                <div class="mb-4">
                    <label for="correo" class="block text-sm font-medium text-gray-700">Correo:</label>
                    <input type="email" id="correo" name="correo" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <!-- Contraseña -->
                <div class="mb-6">
                    <label for="contraseña" class="block text-sm font-medium text-gray-700">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="flex justify-between items-center">
                    <input type="submit" value="Iniciar Sesión" class="w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 cursor-pointer">
                </div>
            </form>
        </div>
    </section>
    <?php
    $nombre = $_GET['nombre'] ?? null;
    $correo = $_GET['correo'] ?? null;
    $contraseña = $_GET['contraseña'] ?? null;
    echo "Nombre: ".$nombre;
    echo "Correo: ".$correo;
    echo "Contraseña: ".$contraseña;
    ?>
</body>
</html>
