<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44DetalleCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('politica_aplica_programa');
            $table->string('objetivo_estrategico_aplica_programa');
            $table->string('objetivo_programa');
            $table->string('meta');
            $table->string('unidad_medida_indicador');
            $table->string('recurso_programa');
            $table->string('alcalce_programa');

            $table->integer('reponsable_programa_id')->unsigned();
            $table->foreign('reponsable_programa_id')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t44_id')->unsigned();
            $table->foreign('t44_id')
                  ->references('id')->on('t12_detalle')
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
        Schema::dropIfExists('t44_detalle');
    }
}
