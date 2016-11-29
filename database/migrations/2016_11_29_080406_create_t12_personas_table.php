<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT12PersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cedula');
            $table->string('apellidos_nombres');
            $table->string('cargo');
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
        Schema::dropIfExists('t12_personas');
    }
}
