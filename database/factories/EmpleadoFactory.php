<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->name(),
            
        ];
    }

    public function agregarDatosFactory()
    {
        $empleados = Empleado::factory()->count(3)->make();
    }
}
