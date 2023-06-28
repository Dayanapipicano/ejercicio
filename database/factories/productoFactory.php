<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class productoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = producto::class;

     
    public function definition(): array
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'precio'=>$this->faker->randomNumber(),
            'existencias'=>$this->faker->sentence(),
            'proveedor'=>$this->faker->randomElement(['Amway','johnson y johnson ','Colgate Palmolive']),
        ];
    }
}
