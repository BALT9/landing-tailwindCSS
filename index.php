<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen"> <!-- Cuerpo flex y con altura mínima de pantalla -->
    <!-- Nav -->
    <nav class="bg-gray-800 py-5 relative">
        <div class="container mx-auto flex items-center justify-between px-3">
            <img src="https://images.seeklogo.com/logo-png/52/2/microsoft-entra-id-logo-png_seeklogo-523357.png" class="w-14 h-14">
            <div class="lg:hidden">
                <i class='bx bx-menu text-white text-4xl cursor-pointer' onclick="openMenu()"></i>
            </div>
            <div class="lg:flex lg:justify-between items-center hidden absolute top-20 left-0 bg-gray-800 lg:relative lg:top-0 left-0 w-full lg:w-auto lg:h-auto h-screen" id="menu">
                <div class="flex flex-col lg:flex-row items-center justify-evenly h-1/2">
                    <a href="#" class="text-white mx-3 lg:my-0 my-5">Inicio</a>
                    <a href="#" class="text-white mx-3 lg:my-0 my-5">Seccion</a>
                    <a href="#" class="text-white mx-3 lg:my-0 my-5">Sobre Nosotros</a>
                    <a href="#" class="text-white mx-3 lg:my-0 my-5">Contacto</a>
                </div>
                <div class="flex flex-col lg:flex-row items-center h-1/2">
                    <a href="./login.php" class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white hover:text-gray-800 transition duration-300 ease-in-out mx-1 my-2 lg:my-auto">Iniciar Sesion</a>
                    <a href="./registro.php" class="text-white bg-blue-500 border border-blue-500 py-2.5 px-5 rounded-md hover:bg-blue-600 hover:border-blue-600 transition duration-300 ease-in-out mx-1 my-2 lg:my-auto">Registrate</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="h-auto flex items-center justify-center bg-gray-800">
        <div class="lg:flex w-full max-w-7xl mx-auto px-6 space-x-6">
          <!-- Primer div: Contenido de texto -->
          <div class="flex-1 text-white mt-16">
            <h1 class="lg:text-6xl text-5xl font-sans text-white" style="font-family: 'Poppins', sans-serif;">Construye tu futuro académico y profesional</h1>
            <p class="text-white text-base py-5" style="font-family: 'Poppins', sans-serif;"><strong>Estudia en línea con flexibilidad y calidad</strong><br>
                Resalta los puntos clave de las clases virtuales: flexibilidad y calidad en la educación.</p>
            <button class="bg-green-500 text-white py-3 px-6 rounded-lg text-xl hover:bg-green-600 transition-colors">Registrarse</button>
          </div>
          <!-- Segundo div: Imagen o contenido adicional -->
          <div class="flex-1">
            <img src="https://pulsodigital.com.mx/wp-content/uploads/Paginas-Web-en-Monterrey-draws-2.png" class="w-full    " alt="">
          </div>
        </div>
    </div>
    <?php
        require "includes/config.php"
    ?>
    <script src="./javascript.js"></script>
</body>
</html>
