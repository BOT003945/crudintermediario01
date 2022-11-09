<?php

namespace Database\Factories;

use App\Models\Estudio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstudioFactory extends Factory
{
    protected $model = Estudio::class;

    public function definition()
    {
        return [
			'Nombre' => $this->faker->name,
			'depto' => $this->faker->name,
			'Abreviatura' => $this->faker->name,
			'Tomas' => $this->faker->name,
			'Frecuencia' => $this->faker->name,
			'Tipoformato' => $this->faker->name,
			'Notas' => $this->faker->name,
			'TiempoProceso' => $this->faker->name,
			'TipoMuestra' => $this->faker->name,
			'Instrucciones' => $this->faker->name,
			'DatosTecnicos' => $this->faker->name,
			'Encabezado' => $this->faker->name,
			'Tubo' => $this->faker->name,
			'Noaplicadescuento' => $this->faker->name,
			'esperfil' => $this->faker->name,
			'sucursal' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
			'SucProceso' => $this->faker->name,
        ];
    }
}
