<?php

namespace Database\Factories;

use App\Models\Restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestauranteFactory extends Factory
{
    /**
     * El nombre del modelo correspondiente.
     *
     * @var string
     */
    protected $model = Restaurante::class;

    /**
     * Definir el estado inicial del modelo.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->company, // Nombre del restaurante
            'rating' => $this->faker->randomFloat(1, 1, 5), // Calificación entre 1 y 5
            'precio' => $this->faker->randomElement(['$', '$$', '$$$']), // Precio
            'tipo_comida' => $this->faker->word, // Tipo de comida
            'direccion' => $this->faker->address, // Dirección
            'estado_apertura' => $this->faker->randomElement(['Abierto', 'Cerrado']), // Estado de apertura
            'horarios' => [
                'lunes' => '10:00 - 22:00',
                'martes' => '10:00 - 22:00',
                'miércoles' => '10:00 - 22:00',
                'jueves' => '10:00 - 22:00',
                'viernes' => '10:00 - 23:00',
                'sábado' => '10:00 - 23:00',
                'domingo' => 'Cerrado',
            ], // Horarios de apertura
            'telefono' => $this->faker->phoneNumber, // Teléfono
            'sitio_web' => $this->faker->url, // Sitio web
            'accesibilidad' => ['silla de ruedas', 'menú en braille'], // Accesibilidad
            'que_ofrecen' => ['desayuno', 'almuerzo', 'cena'], // Lo que ofrecen
            'popular_por' => ['tacos', 'hamburguesas', 'pizza'], // Lo más popular
            'parking' => 'Estacionamiento disponible', // Información de parking
            'amenidades' => ['Wi-Fi', 'Zona para niños'], // Amenidades
            'clicks' => $this->faker->numberBetween(0, 1000), // Número de clics
        ];
    }
}
