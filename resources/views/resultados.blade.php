<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Resultados para: <span class="text-blue-500">{{ ucfirst($termino) }}</span>
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-7xl mx-auto">
        @if($restaurantes->isEmpty())
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded shadow">
                No se encontraron restaurantes.
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($restaurantes as $restaurante)
                    <div class="bg-white dark:bg-gray-800 shadow rounded p-4 space-y-2">
                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">{{ $restaurante->nombre }}</h3>

                        <p><strong>Dirección:</strong> {{ $restaurante->direccion ?? 'No disponible' }}</p>
                        <p><strong>Teléfono:</strong> {{ $restaurante->telefono ?? 'No disponible' }}</p>
                        <p><strong>Rating:</strong> {{ $restaurante->rating ?? 'N/A' }}</p>
                        <p><strong>Precio:</strong> {{ $restaurante->precio ?? 'N/A' }}</p>
                        <p><strong>Tipo de comida:</strong> {{ $restaurante->tipo_comida ?? 'N/A' }}</p>
                        <p><strong>Estado:</strong> {{ $restaurante->estado_apertura ?? 'No especificado' }}</p>

                        @if(!empty($restaurante->horarios))
                            <div>
                                <strong>Horarios:</strong>
                                <ul class="list-disc ml-5 text-sm">
                                    @foreach($restaurante->horarios as $dia => $horario)
                                        <li>{{ ucfirst($dia) }}: {{ $horario }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(!empty($restaurante->sitio_web))
                            <p>
                                <strong>Sitio web:</strong>
                                <a href="{{ $restaurante->sitio_web }}" class="text-blue-600 hover:underline" target="_blank">
                                    Visitar
                                </a>
                            </p>
                        @endif

                        <p><strong>Accesibilidad:</strong>     {{ is_array($restaurante->accesibilidad) ? implode(', ', $restaurante->accesibilidad) : ($restaurante->accesibilidad ?? 'N/A') }}
</p>
                         <p><strong>Ofrecen:</strong> 
    {{ is_array($restaurante->que_ofrecen) ? implode(', ', $restaurante->que_ofrecen) : ($restaurante->que_ofrecen ?? 'N/A') }}
</p>
   
                        <p><strong>Popular por:</strong>     {{ is_array($restaurante->popular_por) ? implode(', ', $restaurante->popular_por) : ($restaurante->popular_por ?? 'N/A') }}
</p>
                        <p><strong>Parking:</strong>     {{ is_array($restaurante->parking) ? implode(', ', $restaurante->parking) : ($restaurante->parking ?? 'N/A') }}
</p>
                        <p><strong>Amenidades:</strong>     {{ is_array($restaurante->parking) ? implode(', ', $restaurante->parking) : ($restaurante->parking ?? 'N/A') }}
</p>
                    </div>
                @endforeach
            </div>
        @endif

        <a href="{{ route('restaurantes.form') }}" class="inline-block mt-6 text-blue-600 hover:underline">
            ← Nueva búsqueda
        </a>
    </div>
</x-app-layout>
