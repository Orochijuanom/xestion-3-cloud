<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT4DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proceso');
            $table->string('zona');
            $table->integer('cargo_id')->unsigned();
            $table->string('actividad');
            $table->string('tarea');
            $table->string('rutinario');
            $table->string('actividad_propia_contratada');
            $table->string('fuente');
            $table->string('medio');
            $table->string('nivel_deficiencia');
            $table->string('nivel_exposicion');
            $table->string('nivel_consecuencia');
            $table->string('aceptabilidad_riesgo');
            $table->string('numero_expuestos');
            $table->string('riesgo_residual');
            $table->string('existencia_requisito_legal');
            $table->string('eliminacion');
            $table->string('sustitucion');
            $table->string('control_ingenieria');
            $table->string('senalizacion');
            $table->string('equipos');
            $table->string('controles_adicionales');

            $table->foreign('cargo_id')
                  ->references('id')->on('cargo')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t4_id')->unsigned();
            $table->foreign('t4_id')
                  ->references('id')->on('t4')
                  ->onUpdate('no action')
                  ->onDelete('restrict');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t4_detalle');
    }
}
