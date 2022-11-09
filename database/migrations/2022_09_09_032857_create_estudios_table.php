<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->string('Nombre', 50)->default('');
            $table->string('Clave', 3)->default('');
            $table->string('depto', 2)->default('');
            $table->string('Abreviatura', 10)->nullable();
            $table->string('Tomas', 2)->nullable();
            $table->string('Frecuencia', 10)->nullable();
            $table->string('Tipoformato', 60)->nullable();
            $table->mediumText('Notas')->nullable();
            $table->string('TiempoProceso', 30)->nullable();
            $table->string('TipoMuestra', 20)->nullable();
            $table->mediumText('Instrucciones')->nullable();
            $table->mediumText('DatosTecnicos')->nullable();
            $table->mediumText('Encabezado')->nullable();
            $table->string('Tubo', 15)->nullable();
            $table->string('Noaplicadescuento', 1)->nullable();
            $table->boolean('esperfil')->default(0);
            $table->integer('id')->primary();
            $table->string('sucursal', 2);
            $table->dateTime('fecha_act')->nullable();
            $table->dateTime('fecha_sync')->nullable();
            $table->string('flag_sucursales', 50)->nullable();
            $table->integer('eliminar')->default(0);
            $table->string('SucProceso', 2)->default('00');
            
           

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
        Schema::dropIfExists('estudios');
    }
}
