<?php

namespace Database\Factories;

use App\Models\Solicitud;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SolicitudFactory extends Factory
{
    protected $model = Solicitud::class;

    public function definition()
    {
        return [
			'Id' => $this->faker->name,
			'sucursal' => $this->faker->name,
			'Solicitud' => $this->faker->name,
			'Folio' => $this->faker->name,
			'suc_paciente' => $this->faker->name,
			'paciente' => $this->faker->name,
			'Fecha' => $this->faker->name,
			'suc_doctor' => $this->faker->name,
			'Doctor' => $this->faker->name,
			'suc_empresa' => $this->faker->name,
			'Empresa' => $this->faker->name,
			'Tipo_Pago' => $this->faker->name,
			'Fecha_Entrega' => $this->faker->name,
			'Anticipo' => $this->faker->name,
			'Expediente' => $this->faker->name,
			'Importe' => $this->faker->name,
			'Tipo_toma' => $this->faker->name,
			'Estatus' => $this->faker->name,
			'Descuento' => $this->faker->name,
			'Facturar_a' => $this->faker->name,
			'Fur' => $this->faker->name,
			'Total' => $this->faker->name,
			'porcentaje' => $this->faker->name,
			'Fecha_Entregado' => $this->faker->name,
			'Factura' => $this->faker->name,
			'NomCredencial' => $this->faker->name,
			'Pagos' => $this->faker->name,
			'NumImpResultados' => $this->faker->name,
			'SeFactura' => $this->faker->name,
			'Impreso' => $this->faker->name,
			'Edad' => $this->faker->name,
			'EdadTipo' => $this->faker->name,
			'Sexo' => $this->faker->name,
			'pase' => $this->faker->name,
			'tel' => $this->faker->name,
			'Estudios' => $this->faker->name,
			'VerificadoPor' => $this->faker->name,
			'condicionesdepago' => $this->faker->name,
			'numcta' => $this->faker->name,
			'SolPDF' => $this->faker->name,
			'procesar' => $this->faker->name,
			'fecha_act' => $this->faker->name,
			'fecha_sync' => $this->faker->name,
			'flag_sucursales' => $this->faker->name,
			'eliminar' => $this->faker->name,
			'subtotal' => $this->faker->name,
			'iva' => $this->faker->name,
			'retivaprct' => $this->faker->name,
			'retivaimpte' => $this->faker->name,
			'retisrprct' => $this->faker->name,
			'retisrimpte' => $this->faker->name,
			'Hora_Toma' => $this->faker->name,
			'Notas' => $this->faker->name,
			'Hora_entrega' => $this->faker->name,
			'Diagnostico' => $this->faker->name,
        ];
    }
}
