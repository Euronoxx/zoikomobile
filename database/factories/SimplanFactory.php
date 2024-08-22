<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SimPlan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SimPlan>
 */
class SimplanFactory extends Factory
{
    protected $model = Simplan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'duration' => $this->faker->randomNumber(3),
            'price' => $this->faker->randomNumber(4),
            'status' => $this->faker->text('yes')
        ];
    }
}
