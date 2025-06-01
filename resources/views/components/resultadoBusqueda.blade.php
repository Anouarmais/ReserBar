<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tarjetas de Resultado</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<!-- Contenedor con margen y grilla -->
<div class="max-w-7xl mx-auto px-5 py-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

  <!-- Tarjeta fija 1 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition duration-300">
    <a href="#">
      <img
        src="/images/ss.png"
        alt="Ejemplo de título"
        class="rounded-t-lg w-full max-h-48 object-cover"
      />
    </a>
    <div class="p-4">
      <a href="#">
        <h5 class="text-lg font-semibold text-gray-900 truncate">
          Título fijo de ejemplo
        </h5>
      </a>
      <p class="mt-2 text-sm text-gray-600">
        Descripción fija de ejemplo que muestra cómo quedaría el texto aquí.
      </p>
      <a href="#" class="mt-3 inline-block text-sm text-[#00AFCB] hover:underline">
        Leer más →
      </a>
    </div>
  </div>

  <!-- Tarjeta fija 2 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition duration-300">
    <a href="#">
      <img
        src="/images/otra.png"
        alt="Otro ejemplo"
        class="rounded-t-lg w-full max-h-48 object-cover"
      />
    </a>
    <div class="p-4">
      <a href="#">
        <h5 class="text-lg font-semibold text-gray-900 truncate">
          Otro título fijo
        </h5>
      </a>
      <p class="mt-2 text-sm text-gray-600">
        Otra descripción para mostrar el formato.
      </p>
      <a href="#" class="mt-3 inline-block text-sm text-[#00AFCB] hover:underline">
        Leer más →
      </a>
    </div>
  </div>


</div>

</body>
</html>
