<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT4EppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4_epps', function (Blueprint $table) {
            $table->increments('id');

            $table->foreign('epps_id')
                  ->references('id')->on('epps')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t4_detalle_id')->unsigned();
            $table->foreign('t4_detalle_id')
                  ->references('id')->on('t4_detalle')
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
        Schema::dropIfExists('t4_epps');
    }
}
