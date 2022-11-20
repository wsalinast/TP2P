<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empleado>
 */
class EmpleadoFactory extends Factory
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
            'cargo'=>fake()->jobTitle(),
            'telefono'=>fake()->phoneNumber(),
            'edad'=>fake()->numberBetween(18,70),
            'ciudad'=>fake()->city(),
            'identidad'=>fake()->numerify('####-').fake()->numberBetween(1980,2005).fake()->numerify('-#####'),
            'email'=>fake()->email()
        ];
    }
}
