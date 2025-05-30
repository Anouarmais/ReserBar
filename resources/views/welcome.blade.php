<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restervar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-purple-500 to-indigo-600 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-xl flex flex-col md:flex-row overflow-hidden max-w-6xl w-full min-h-[600px]">

        <!-- IZQUIERDA -->
        <div class="p-10 md:w-1/2 flex flex-col justify-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Restervar</h1>
            <p class="text-gray-700 text-lg mb-8 leading-relaxed">Encuentra los mejores sitios para comer en tu ciudad y reserva mesa en segundos. Todo desde un solo lugar.</p>
            <a href="{{ route('home') }}" class="inline-block bg-gradient-to-r from-purple-500 to-indigo-500 text-white px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:scale-105 transition-transform duration-300">
                ¿Qué vas a querer hoy?
            </a>
        </div>

        <!-- DERECHA CON HEADER Y FONDO -->
        <div class="relative md:w-1/2 hidden md:block">
            <!-- Fondo con imagen -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/photo.landing.jpg'); filter: brightness(0.9);"></div>

            <!-- Header con botones -->
            <div class="relative z-10 flex justify-end p-6 space-x-4">
                <a href="{{ route('login') }}" class="text-sm text-white hover:text-blue-600 font-medium px-4 py-2 rounded-lg transition">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="text-sm text-white hover:text-blue-600 px-4 py-2 rounded-lg transition">
                    Registrarse
                </a>
            </div>
        </div>

    </div>
</body>
</html>