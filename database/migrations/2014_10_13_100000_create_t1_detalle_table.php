<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT1DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t1_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('politica_sistema_gestion');
            $table->string('area');
            $table->string('objetivo');
            $table->string('nombre_indicador');
            $table->string('unidad_medida');
            $table->string('frecuencia_analisis');
            $table->string('metodo_calculo');
            $table->string('meta');
            $table->string('ficha_indicador');
            $table->string('responsable');
            $table->integer('t1_id')->unsigned();
            $table->foreign('t1_id')
                  ->references('id')->on('t1')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            
                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t1_detalle');
    }
}
