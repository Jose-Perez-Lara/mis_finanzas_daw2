<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spending>
 */
class SpendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->numberBetween(1, 2);
        $date = $this->faker->dateTimeBetween('-7 week');
        $amount = $this->faker->randomNumber(3);
        return [
            'date' => $date,
            'amount' => $amount,
            'category' => $category == 1 ? 'compra' : 'bizum',
        ];
    }
}
