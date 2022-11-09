<?php

namespace Database\Factories;

use App\Models\DetalleGrupoAntibiotico;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DetalleGrupoAntibioticoFactory extends Factory
{
    protected $model = DetalleGrupoAntibiotico::class;

    public function definition()
    {
        return [
			'id_GrupoAntibiotico' => $this->faker->name,
			'id_Antibiotico' => $this->faker->name,
        ];
    }
}
