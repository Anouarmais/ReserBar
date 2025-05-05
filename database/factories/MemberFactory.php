<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
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
            'name' => fake()->name(),
            'restaurant_name' => fake()->name(),
            'type_Subscription' => fake()->randomElement(['mensual', 'anual', 'trimestral']),
            'phone' => fake()->phoneNumber(),
            'pay_date' => fake()->dateTimeBetween('-1 month', '+1 month'),

        ];
    }
}
