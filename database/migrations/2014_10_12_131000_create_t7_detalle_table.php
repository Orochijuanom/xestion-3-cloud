<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT7DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t7_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comite');
            $table->string('sede_proyecto');
            $table->string('fecha_reunion_comite');
            $table->string('abiertos');
            $table->string('cerrados');
            $table->string('fecha_prox_reunion');
            $table->string('evidencia_reunion');
            
            $table->integer('t7_id')->unsigned();
            $table->foreign('t7_id')
                  ->references('id')->on('t7')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
                                                                                    
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t7_detalle');
    }
}
