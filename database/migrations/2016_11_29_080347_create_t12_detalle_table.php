<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT12DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('capacitacion');
            $table->string('objetivo');
            $table->string('temas_capacitacion');
            $table->string('responsable');
            $table->string('hv_capacitador');
            $table->string('cargos_1');
            $table->string('cargos_2');
            $table->string('cargos_3');
            $table->string('cargos_4');
            $table->string('cargos_5');
            $table->string('cargos_6');
            $table->string('cargos_7');
            $table->string('cargos_8');
            $table->integer('t12_id')->unsigned();
            $table->foreign('t12_id')
                  ->references('id')->on('t12')
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
        Schema::dropIfExists('t12_detalle');
    }
}
