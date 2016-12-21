<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->date('fecha');
            $table->string('version');
            $table->string('objetivos_programa');
            $table->string('alcance_programa');
            
            $table->integer('politicas_id')->unsigned();
            $table->foreign('politicas_id')
                  ->references('id')->on('t1_detalle')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('objetivos_est_id')->unsigned();
            $table->foreign('objetivos_est_id')
                  ->references('id')->on('t1_detalle')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            
            $table->integer('responsable_id')->unsigned();
            $table->foreign('responsable_id')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('recurso_id')->unsigned();
            $table->foreign('recurso_id')
                  ->references('id')->on('t2')
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
         Schema::dropIfExists('t44');
    }
}
