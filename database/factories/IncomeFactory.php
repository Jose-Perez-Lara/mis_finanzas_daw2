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
        $date = $this->faker->dateTimeBetween('-7 week');
        $amount = $this->faker->randomNumber(4);
        $category_id = $this->faker->numberBetween(1, 3);
        return [
            'date' => $date,
            'amount' => $amount,
            'category_id' => $category_id,
        ];
    }
}
