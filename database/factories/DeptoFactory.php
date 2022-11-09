<?php

namespace Database\Factories;

use App\Models\Depto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DeptoFactory extends Factory
{
    protected $model = Depto::class;

    public function definition()
    {
        return [
			'sucursal' => $this->faker->name,
			'Depto' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
        ];
    }
}
