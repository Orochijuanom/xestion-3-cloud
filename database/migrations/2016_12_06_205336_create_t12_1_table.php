<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT121Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t12_1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('version');
            $table->date('fecha');
            
            $table->integer('t12_id')->unsigned();
            $table->foreign('t12_id')
                ->references('id')->on('t12')
                ->onUpdate('no action')
                ->onDelete('restrict');
                
            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')
                  ->references('id')->on('empresa')
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
        Schema::dropIfExists('t12_1');
    }
}
