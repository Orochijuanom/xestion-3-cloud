<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT121DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_1_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apellidos_nombres')->unsigned();
            $table->date('p');
            $table->string('e');
            $table->string('puntaje_obtenido');
            $table->string('puntaje_posible');
            
            $table->foreign('apellidos_nombres')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t12_1_id')->unsigned();
            $table->foreign('t12_1_id')
                  ->references('id')->on('t12_1')
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
        Schema::dropIfExists('t12_1_detalle');
    }
}
