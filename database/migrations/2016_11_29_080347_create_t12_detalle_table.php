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
