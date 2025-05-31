<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Navbar tipo Vinted</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

<nav class="border-b bg-white shadow-sm">
  <div class="max-w-7xl mx-auto px-5 py-4">
    <div class="flex items-center justify-between">
      <!-- Logo + búsqueda -->
      <div class="flex items-center gap-4 flex-grow min-w-0">
        <span class="text-2xl font-semibold text-teal-700 shrink-0">Vinted</span>

        <!-- Selector + Input búsqueda -->
        <div class="flex items-center gap-3 flex-grow min-w-0">
          <select class="border px-3 py-1.5 rounded text-sm shrink-0">
            <option>Artículos</option>
          </select>
          <input
            type="text"
            placeholder="Busca artículos"
            class="border px-4 py-2 rounded flex-grow min-w-0 text-sm"
          />
        </div>
      </div>

      <!-- Botones, iconos y user -->
      <div class="flex items-center gap-4">
        <button class="bg-teal-700 text-white px-4 py-2 rounded text-sm">Vender ahora</button>
        <span class="text-lg select-none cursor-pointer">🔔</span>
        <span class="text-lg select-none cursor-pointer">💌</span>
        <span class="text-lg select-none cursor-pointer">🤍</span>
<span class="text-lg select-none cursor-pointer">🤍</span>
       <img src="../../../img/ss.png" alt="User" class="rounded-full w-7 h-7" />

        <span class="text-sm">User</span>
        <select class="text-sm border border-gray-300 rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-teal-500">
          <option>ES</option>
        </select>
      </div>
    </div>

    <!-- Menú de navegación -->
    <ul class="mt-5 flex flex-wrap gap-x-5 gap-y-2 text-sm text-gray-800" role="menubar">
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Mujer</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Hombre</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Moda de diseño</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Niños</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Hogar</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Electrónica</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Entretenimiento</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Deportes</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Mascotas</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Sobre Vinted</a></li>
      <li role="none"><a href="#" role="menuitem" class="hover:underline">Nuestra plataforma</a></li>
    </ul>
  </div>
</nav>


</body>
</html>
