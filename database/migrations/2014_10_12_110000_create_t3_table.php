<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t3', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha_actualizacion');
            $table->string('motivo_actualizacion');
            $table->string('responsable_actualizacion');
            $table->string('revisado_por');
            $table->integer('t1_id')->unsigned();
            $table->foreign('t1_id')
                  ->references('id')->on('t1')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
                                                                                    
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t1');
    }
}
