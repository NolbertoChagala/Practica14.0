<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_alumnos'=>$this->faker->name(),
            'matricula_alumnos'=>$this->faker->randomNumber(5),
            'correo_alumnos'=>$this->faker->email(),
        ];
    }
}
