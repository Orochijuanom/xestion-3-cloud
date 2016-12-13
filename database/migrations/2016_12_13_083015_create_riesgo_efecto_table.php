<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoEfectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descripcion_efecto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('descripcion_id')->unsigned();
            $table->integer('efecto_id')->unsigned();

            $table->foreign('descripcion_id')
                  ->references('id')->on('riesgo_descripcion')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('efecto_id')
                  ->references('id')->on('efecto')
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
        Schema::dropIfExists('riesgo_efecto');
    }
}
