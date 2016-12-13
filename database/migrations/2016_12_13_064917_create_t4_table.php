<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->date('fecha');
            $table->string('version');
            $table->string('area');
            $table->string('procesos');
            $table->integer('cargo_id')->unsigned();
            $table->date('fecha_elaboracion');
            $table->integer('responsable_elaboracion')->unsigned();
            $table->date('fecha_actualizacion');
            $table->integer('empresa_id')->unsigned();
            
            $table->foreign('empresa_id')
                  ->references('id')->on('empresa')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            
            $table->foreign('responsable_elaboracion')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            
            $table->foreign('cargo_id')
                  ->references('id')->on('cargo')
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
        Schema::dropIfExists('t4');
    }
}
