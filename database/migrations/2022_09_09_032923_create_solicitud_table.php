<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->integer('Id')->primary();
            $table->string('sucursal', 2);
            $table->string('Solicitud', 13);
            $table->integer('Folio')->nullable();
            $table->string('suc_paciente', 2);
            $table->string('paciente', 6)->nullable();
            $table->dateTime('Fecha')->nullable();
            $table->string('suc_doctor', 2);
            $table->string('Doctor', 5)->nullable();
            $table->string('suc_empresa', 2);
            $table->string('Empresa', 5)->nullable();
            $table->string('Tipo_Pago', 30)->nullable();
            $table->dateTime('Fecha_Entrega')->nullable();
            $table->double('Anticipo')->nullable();
            $table->mediumText('Expediente')->nullable();
            $table->double('Importe')->nullable();
            $table->string('Tipo_toma', 15)->nullable();
            $table->string('Estatus', 1)->nullable();
            $table->double('Descuento')->nullable();
            $table->string('Facturar_a', 15)->nullable();
            $table->string('Fur', 8)->nullable();
            $table->double('Total')->nullable();
            $table->string('porcentaje', 1)->nullable();
            $table->dateTime('Fecha_Entregado')->nullable();
            $table->string('Factura', 10)->nullable();
            $table->string('NomCredencial', 30)->nullable();
            $table->double('Pagos')->nullable();
            $table->integer('NumImpResultados')->nullable();
            $table->integer('SeFactura')->nullable();
            $table->string('Impreso', 1)->nullable();
            $table->string('Edad', 3)->nullable();
            $table->string('EdadTipo', 10)->nullable();
            $table->string('Sexo', 50)->nullable();
            $table->string('Nota', 150)->nullable();
            $table->string('pase', 50)->nullable();
            $table->string('tel', 50)->nullable();
            $table->string('Estudios', 255)->nullable();
            $table->string('VerificadoPor', 60)->nullable();
            $table->string('condicionesdepago', 10)->nullable();
            $table->string('numcta', 20)->nullable();
            $table->longtext('SolPDF');
            $table->integer('procesar')->default(0);
            $table->dateTime('fecha_act')->nullable();
            $table->dateTime('fecha_sync')->nullable();
            $table->string('flag_sucursales', 50)->nullable();
            $table->integer('eliminar')->default(0);
            $table->double('subtotal')->nullable();
            $table->double('iva')->nullable();
            $table->double('retivaprct')->nullable();
            $table->double('retivaimpte')->nullable();
            $table->double('retisrprct')->nullable();
            $table->double('retisrimpte')->nullable();
            

            $table->timestamps();
            $table->engine='innoDB';
           /*  $table->foreignId('id_Paciente')
                ->nullable()
                ->constrained('Pacientes')
                ->cascadeOnUpdate()
                ->nullOnDelete(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
}
