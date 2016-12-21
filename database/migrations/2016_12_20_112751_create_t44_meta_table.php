<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44MetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44_meta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta');
            $table->string('valor');

            $table->integer('t44_id')->unsigned();
            $table->foreign('t44_id')
                  ->references('id')->on('t44')
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
        Schema::dropIfExists('t44_meta');
    }
}
