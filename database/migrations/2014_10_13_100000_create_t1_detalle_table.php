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
            $table->integer('numero_indicador')->unsigned();
            $table->string('responsable');            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

            $table->foreign('numero_indicador')
                  ->references('id')->on('t11')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

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
