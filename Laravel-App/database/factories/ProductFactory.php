<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Product::class;
    public function definition(): array
    {
        return [
            'name'=> $this->faker->title(),
            'desc'=> $this->faker->paragraph(),
            'status'=> $this->faker->title(),
            'price'=> $this->faker->title(),
            'created_at'=> now(),
        ];
    }
}
