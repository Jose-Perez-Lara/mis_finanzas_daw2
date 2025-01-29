<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = $this->faker->numberBetween(1, 2);
        $date = $this->faker->date($max = now());
        $amount = $this->faker->randomNumber(4);
        return [
            'date' => $date,
            'amount' => $amount,
            'category' => $category == 1 ? 'salario' : 'bizum',
        ];
    }
}
