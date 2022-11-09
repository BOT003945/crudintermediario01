<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstxsolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estxsol', function (Blueprint $table) {
            $table->string('sucursal', 2);
            $table->string('solicitud', 13)->default('');
            $table->string('MuestraId', 11)->default('');
            $table->integer('id')->primary();
            $table->string('Depto', 2)->default('');
            $table->string('Estudio', 3)->default('');
            $table->string('Tomas', 2)->nullable();
            $table->string('Faltantes', 2)->nullable();
            $table->double('Importe')->nullable();
            $table->string('Estatus', 1)->nullable();
            $table->mediumText('Observaciones')->nullable();
            $table->dateTime('Fecha')->nullable();
            $table->string('Imprimir', 1)->nullable();
            $table->string('Tubo', 15)->nullable();
            $table->string('abreviatura', 10)->nullable();
            $table->string('TipoFormato', 1)->nullable();
            $table->string('Noaplicadescuento', 1)->nullable();
            $table->string('VerificadoPor', 60)->nullable();
            $table->integer('Publicado')->nullable();
            $table->longtext('WordPDF');
            $table->double('Precio')->nullable();
            $table->double('Iva')->nullable();
            $table->double('ivaprct')->nullable();
            $table->double('descimpte')->nullable();
            $table->double('descprct')->nullable();
            $table->boolean('GrupoPerfil')->default(0);
            $table->boolean('EsPerfil')->default(0);
            $table->dateTime('fecha_act')->nullable();
            $table->dateTime('fecha_sync')->nullable();
            $table->string('flag_sucursales', 50)->nullable();
            $table->integer('eliminar')->default(0);
            $table->string('NombrePerfil', 50)->nullable();
            $table->string('nombrepaciente', 150)->nullable();
            
            
            $table->timestamps();
            $table->engine='innoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estxsol');
    }
}
