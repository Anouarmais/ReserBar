<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear 10 restaurantes usando la factory
        Restaurante::factory(10)->create();
    }
}
