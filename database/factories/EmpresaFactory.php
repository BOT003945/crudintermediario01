<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;

    public function definition()
    {
        return [
			'sucursal' => $this->faker->name,
			'Clave' => $this->faker->name,
			'Nombre' => $this->faker->name,
			'cp' => $this->faker->name,
			'tel1' => $this->faker->name,
			'tel2' => $this->faker->name,
			'Fec_convenio' => $this->faker->name,
			'tipo_tarifa' => $this->faker->name,
			'contacto' => $this->faker->name,
			'colonia' => $this->faker->name,
			'descuento' => $this->faker->name,
			'Pacientes_Mes' => $this->faker->name,
			'Pacientes_Acum' => $this->faker->name,
			'Importe_Mes' => $this->faker->name,
			'Importe_Acum' => $this->faker->name,
			'Saldo' => $this->faker->name,
			'rfc' => $this->faker->name,
			'direccion' => $this->faker->name,
			'Ciudad' => $this->faker->name,
			'Entidad' => $this->faker->name,
			'Tipo_Empresa' => $this->faker->name,
			'Fecha_Corte' => $this->faker->name,
			'dias_pago' => $this->faker->name,
			'Acum_estudios' => $this->faker->name,
			'Cla_Ant' => $this->faker->name,
			'UsaTarifaDe' => $this->faker->name,
			'SiUsa' => $this->faker->name,
			'numero' => $this->faker->name,
			'pais' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
        ];
    }
}
