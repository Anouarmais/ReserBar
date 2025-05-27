<section class="bg-[url('/images/hero.jpg')] bg-cover bg-center text-white py-28 px-6 text-center">
  <h1 class="text-4xl md:text-6xl font-bold mb-4">Encuentra el bar perfecto en tu ciudad</h1>
  <p class="text-lg md:text-xl mb-8">Descubre, valora y reserva bares con solo unos clics</p>
  <form action="{{ route('home') }}" method="GET" class="max-w-xl mx-auto">
    <input type="text" name="query" placeholder="¿Qué te apetece hoy?" class="w-full px-5 py-3 rounded-xl text-black" />
  </form>
</section>

