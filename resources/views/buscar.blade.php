<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Buscar restaurantes
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-7xl mx-auto">
        <form action="{{ route('restaurantes.buscar') }}" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <input type="text" name="zona" class="form-input rounded-md shadow-sm w-full" placeholder="Ej: murcia_centro, espinardo, granada_sur..." required>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded col-span-1 md:col-span-1">
                Buscar
            </button>
        </form>
    </div>
</x-app-layout>
