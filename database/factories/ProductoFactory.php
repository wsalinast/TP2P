<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_producto'=>fake()->name(),
            'marca'=>fake()->word(),
            'precio'=>fake()->numberBetween(10000, 20000),
            'descripcion_producto'=>fake()->paragraph(),
            'proveedor'=>fake()->company(),
            'existencias'=>fake()->numberBetween(100, 8000)
        ];
    }
}
