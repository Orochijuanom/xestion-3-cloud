<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT10DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t10_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proceso');
            $table->string('tipo_documento');
            $table->string('codigo_documento');
            $table->string('nombre_documento');
            $table->string('origen_interno');
            $table->string('origen_externo');
            $table->string('version');
            $table->date('fecha_version');
            $table->string('aprobado_por');
            $table->string('medio_almacenamiento');
            $table->string('acceso');
            $table->string('proteccion');
            $table->string('sitio_consulta_documento');
            $table->string('sitio_cosulta_registro_fisico');
            $table->string('sitio_consulta_registro_digital');
            $table->string('tiempo_retencion');
            $table->string('disposicion_final');
            $table->string('motivo_cambio_version_documento');
            $table->integer('t10_id')->unsigned();
            $table->foreign('t10_id')
                  ->references('id')->on('t10')
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
        Schema::dropIfExists('t10_detalle');
    }
}
