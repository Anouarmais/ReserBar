<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restervar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('/images/photo.landing.jpg');">

    <!-- HEADER con botones -->
    <div class="flex justify-end p-6 space-x-4">
        <a href="{{ route('register') }}" class="text-sm text-black hover:text-blue-400 px-4 py-2 rounded-lg transition">Registrarse</a>
        <a href="{{ route('login') }}" class="text-sm text-black hover:text-blue-400 px-4 py-2 rounded-lg transition">Iniciar sesión</a>
        
    </div>

    <!-- CONTENIDO IZQUIERDA -->
    <div class="flex items-center min-h-[80vh] px-10 md:px-20">
        <div class="max-w-xl text-left">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 drop-shadow-lg">Restervar</h1>
            <p class="text-white text-lg mb-8 leading-relaxed drop-shadow-md">Encuentra los mejores sitios para comer en tu ciudad y reserva mesa en segundos. Todo desde un solo lugar.</p>
            <a href="{{ route('home') }}" class="inline-block bg-gradient-to-r from-blue-400 to-blue-800 text-white px-6 py-3 rounded-full text-lg font-semibold shadow-md hover:scale-105 transition-transform duration-300">
                ¿Qué vas a querer hoy?
            </a>
        </div>
    </div>

</body>
</html>