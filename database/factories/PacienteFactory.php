<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PacienteFactory extends Factory
{
    protected $model = Paciente::class;

    public function definition()
    {
        return [
			'sucursal' => $this->faker->name,
			'Clave' => $this->faker->name,
			'Paciente' => $this->faker->name,
			'Paterno' => $this->faker->name,
			'Materno' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'FecNac' => $this->faker->name,
			'Sexo' => $this->faker->name,
			'Calle' => $this->faker->name,
			'Numero' => $this->faker->name,
			'Rfc' => $this->faker->name,
			'Estudios' => $this->faker->name,
			'Ult_solicitud' => $this->faker->name,
			'Fec_alta' => $this->faker->name,
			'Importe' => $this->faker->name,
			'Importe_Acum' => $this->faker->name,
			'Saldo' => $this->faker->name,
			'EmpresaAnt' => $this->faker->name,
			'suc_empresa' => $this->faker->name,
			'Empresa' => $this->faker->name,
			'Foraneo' => $this->faker->name,
			'Descuento' => $this->faker->name,
			'Titular' => $this->faker->name,
			'Estado' => $this->faker->name,
			'Municipio' => $this->faker->name,
			'Localidad' => $this->faker->name,
			'Cp' => $this->faker->name,
			'Colonia' => $this->faker->name,
			'Credencial' => $this->faker->name,
			'NumCredencial' => $this->faker->name,
			'Telefono' => $this->faker->name,
			'NumEmpleado' => $this->faker->name,
			'Pais' => $this->faker->name,
			'cliente' => $this->faker->name,
			'email' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
			'enviarwhatsapp' => $this->faker->name,
        ];
    }
}
