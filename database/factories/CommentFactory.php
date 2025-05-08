<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'restaurante_id' => fake()->randomNumber(),
            'usuario_id' => fake()->randomNumber(),
            'texto' => fake()->text(),
            'fecha_hora' => fake()->dateTime(),
        ];
    }
}
