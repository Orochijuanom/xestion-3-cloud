<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44Grafico1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44_grafico_1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_grafico');
            $table->string('nombre_grafico');
            $table->string('objetivo');
            $table->string('descripcion');
            $table->string('metodo_calculo');
            $table->string('frecuencia_medicion_reporte');
            $table->text('analisis');
            $table->string('valor1');
            $table->string('valor2');
            $table->string('valor3');
            $table->string('meta');
            
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
        Schema::dropIfExists('t44_grafico_1');
    }
}
