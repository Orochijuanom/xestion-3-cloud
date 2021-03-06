<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoDescripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riesgo_descripcion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');

            $table->integer('riesgo_id')->unsigned();
            $table->foreign('riesgo_id')
                  ->references('id')->on('riesgo')
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
        Schema::dropIfExists('riesgo_descripcion');
    }
}
