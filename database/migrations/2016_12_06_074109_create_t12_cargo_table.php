<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT12CargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cargo_id')->unsigned();
            
            $table->integer('t12detalle_id')->unsigned();
            $table->foreign('t12detalle_id')
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
        Schema::dropIfExists('t12_cargo');
    }
}
