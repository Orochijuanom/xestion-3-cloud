<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT2Nota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t2_nota', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_nota');
            $table->integer('cargo')->unsigned();
            $table->string('motivo');

            $table->foreign('cargo')
                  ->references('id')->on('cargo')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

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
        Schema::dropIfExists('t2_nota');
    }
}
