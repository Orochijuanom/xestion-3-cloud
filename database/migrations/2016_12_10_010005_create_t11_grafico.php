<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT11Grafico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t11_grafico', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t11_detalle_id')->unsigned();
            $table->string('valor');

            $table->foreign('t11_detalle_id')
                  ->references('id')->on('t11_detalle')
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
        Schema::dropIfExists('t11_grafico');
    }
}
