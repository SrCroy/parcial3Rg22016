<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedores>
 */
class ProveedoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombreProveedor' => $this->faker->company(),
            'direccion' => $this->faker->address(),
            'codigo' => $this->faker->unique()->numerify('PROV-####'),
        ];
    }
}
