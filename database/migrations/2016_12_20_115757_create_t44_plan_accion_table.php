<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44PlanAccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44_plan_accion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hallazgos_programa');
            $table->string('gestion_propuesta');
            $table->date('fecha_compromiso_ejecucion');
            $table->date('fecha_ejecucion');
            $table->string('cierre_oportuno');
            $table->string('evidencia');

            $table->integer('responsable_accion_id')->unsigned();
            $table->foreign('responsable_accion_id')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t44_id')->unsigned();
            $table->foreign('t44_id')
                  ->references('id')->on('t44')
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
        Schema::dropIfExists('t44_plan_accion');
    }
}
