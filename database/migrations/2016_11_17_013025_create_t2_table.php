<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('version');
            $table->date('fecha');
            $table->string('presupuesto_anio');
            $table->date('fecha_asignacion_presupuesto');
            $table->string('responsable_planificacion_presupuesto');
            $table->string('cargo');
            $table->integer('t1_id')->unsigned();
            $table->foreign('t1_id')
                  ->references('id')->on('t1')
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
        Schema::dropIfExists('t2');
    }
}
