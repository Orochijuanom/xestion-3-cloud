<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT11DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t11_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha_creacion_indicador');
            $table->string('ficha_numero');
            $table->string('nombre_indicador');
            $table->string('definicion_indicador');
            $table->string('meta');        
            $table->string('tipo_indicador');
            $table->string('metodo_calculo');
            $table->string('fuente_datos_calculo');
            $table->string('interpretacion');
            
            $table->integer('responsable_calculo_seguimiento')->unsigned();
            $table->foreign('responsable_calculo_seguimiento')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t11_id')->unsigned();
            $table->foreign('t11_id')
                  ->references('id')->on('t11')
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
        Schema::dropIfExists('t11_detalle');
    }
}
