<?php

namespace Database\Factories;

use App\Models\Estxsol;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EstxsolFactory extends Factory
{
    protected $model = Estxsol::class;

    public function definition()
    {
        return [
			'sucursal' => $this->faker->name,
			'solicitud' => $this->faker->name,
			'MuestraId' => $this->faker->name,
			'Depto' => $this->faker->name,
			'Estudio' => $this->faker->name,
			'Tomas' => $this->faker->name,
			'Faltantes' => $this->faker->name,
			'Importe' => $this->faker->name,
			'Estatus' => $this->faker->name,
			'Observaciones' => $this->faker->name,
			'Fecha' => $this->faker->name,
			'Imprimir' => $this->faker->name,
			'Tubo' => $this->faker->name,
			'abreviatura' => $this->faker->name,
			'TipoFormato' => $this->faker->name,
			'Noaplicadescuento' => $this->faker->name,
			'VerificadoPor' => $this->faker->name,
			'Publicado' => $this->faker->name,
			'WordPDF' => $this->faker->name,
			'Precio' => $this->faker->name,
			'Iva' => $this->faker->name,
			'ivaprct' => $this->faker->name,
			'descimpte' => $this->faker->name,
			'descprct' => $this->faker->name,
			'GrupoPerfil' => $this->faker->name,
			'EsPerfil' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
			'NombrePerfil' => $this->faker->name,
			'nombrepaciente' => $this->faker->name,
        ];
    }
}
