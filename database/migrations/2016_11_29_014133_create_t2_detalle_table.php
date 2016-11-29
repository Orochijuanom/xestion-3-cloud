<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT2DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t2_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad');
            $table->string('presupuesto');
            $table->string('ejecucion_primer_semestre');
            $table->string('ejecucion_segundo_semestre');
            $table->integer('t2_id')->unsigned();
            $table->foreign('t2_id')
                  ->references('id')->on('t2')
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
        Schema::dropIfExists('t2_detalle');
    }
}
