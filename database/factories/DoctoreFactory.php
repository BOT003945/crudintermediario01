<?php

namespace Database\Factories;

use App\Models\Doctore;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctoreFactory extends Factory
{
    protected $model = Doctore::class;

    public function definition()
    {
        return [
			'sucursal' => $this->faker->name,
			'doctor' => $this->faker->name,
			'Paterno' => $this->faker->name,
			'Materno' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'Direccion' => $this->faker->name,
			'Especialidad1' => $this->faker->name,
			'Especialidad2' => $this->faker->name,
			'Fec_alta' => $this->faker->name,
			'Pacientes_Mes' => $this->faker->name,
			'Pacientes_Acum' => $this->faker->name,
			'Importe_mes' => $this->faker->name,
			'Importe_Acum' => $this->faker->name,
			'Centro' => $this->faker->name,
			'Tels' => $this->faker->name,
			'Estado' => $this->faker->name,
			'Municipio' => $this->faker->name,
			'Localidad' => $this->faker->name,
			'cp' => $this->faker->name,
			'Colonia' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
			'CedProf' => $this->faker->name,
			'FecNac' => $this->faker->name,
			'Sexo' => $this->faker->name,
			'email' => $this->faker->name,
        ];
    }
}
