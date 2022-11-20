<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'direccion'=>fake()->address(),
            'telefono'=>fake()->phoneNumber(),
            'ciudad'=>fake()->city(),
            'fecha_pedido'=>fake()->date(),
            'email'=>fake()->email(),
            'pais'=>fake()->country()
        ];
    }
}
