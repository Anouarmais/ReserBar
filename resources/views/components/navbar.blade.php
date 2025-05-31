<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

  <nav class="border-b bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-5 py-4">
      <div class="flex items-center justify-between">
        <!-- Logo + búsqueda -->
        <div class="flex items-center gap-4 flex-grow min-w-0">
          <a href="{{ route('interfaz.principal') }}">
            <span class="text-2xl font-semibold" style="color:#00AFCB;">ResertVar</span>
          </a>


          <!-- Selector + Input búsqueda -->
          <div class="flex items-center gap-3 flex-grow min-w-0">

            <input
              type="text"
              placeholder="Busca artículos"
              class="border px-4 py-2 rounded flex-grow min-w-0 text-sm" />
          </div>
        </div>

        <!-- Botones, iconos y user -->
        <div class="flex items-center gap-4">
          <button class="text-white px-4 py-2 rounded text-sm" style="background-color:#00AFCB;">Buscar</button>

          <!-- Campana -->
          <span class="text-lg select-none cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AFCB" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 3a6.75 6.75 0 00-6.75 6.75v2.086c0 .414-.168.81-.466 1.098l-1.16 1.101a.75.75 0 00.513 1.293h17.226a.75.75 0 00.513-1.293l-1.16-1.1a1.5 1.5 0 01-.467-1.099V9.75A6.75 6.75 0 0012 3z" />
              <circle cx="12" cy="17.25" r="0.75" fill="#00AFCB" />
            </svg>
          </span>

          <!-- Carta -->
          <span class="text-lg select-none cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AFCB" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 5.75A2.25 2.25 0 015.25 3.5h13.5A2.25 2.25 0 0121 5.75v12.5a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18.25V5.75z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 6l9 7 9-7" />
            </svg>
          </span>

          <!-- Corazón -->
          <span class="text-lg select-none cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5" stroke="#00AFCB" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.014-4.5-4.5-4.5A4.505 4.505 0 0012 6.75a4.505 4.505 0 00-4.5-3c-2.486 0-4.5 2.015-4.5 4.5 0 6.294 9 11.25 9 11.25s9-4.956 9-11.25z" />
            </svg>
          </span>

          <!-- Usuario (lleva al perfil) -->
          <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 text-sm text-gray-700 hover:text-[#00AFCB]">
            <img src="../../../img/ss.png" alt="User" class="rounded-full w-7 h-7" />
          </a>

        </div>
      </div>

      <!-- Menú de navegación -->
<ul class="mt-5 flex flex-wrap gap-x-5 gap-y-2 text-sm text-gray-800" role="menubar">
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Inicio</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Restaurantes</a></li>
  <li role="none" class="relative group">
    <a href="#" role="menuitem" class="hover:underline">Por tipo de cocina</a>
    <ul class="absolute hidden group-hover:block bg-white shadow-md rounded mt-1 p-2 text-sm">
      <li><a href="#" class="block px-4 py-1 hover:bg-gray-100">Mexicana</a></li>
      <li><a href="#" class="block px-4 py-1 hover:bg-gray-100">Italiana</a></li>
      <li><a href="#" class="block px-4 py-1 hover:bg-gray-100">Asiática</a></li>
      <li><a href="#" class="block px-4 py-1 hover:bg-gray-100">Vegetariana / Vegana</a></li>
      <li><a href="#" class="block px-4 py-1 hover:bg-gray-100">Postres y cafés</a></li>
    </ul>
  </li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Ofertas y promociones</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Nuevos restaurantes</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Reservas</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Pedidos a domicilio</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Eventos y catering</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Sobre ResertVar</a></li>
  <li role="none"><a href="#" role="menuitem" class="hover:underline">Contacto</a></li>
</ul>

    </div>
  </nav>

</body>

</html>