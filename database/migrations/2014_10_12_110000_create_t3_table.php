<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT3Table extends Migration
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
            $table->string('fecha_actualizacion');
            $table->string('motivo_actualizacion');
            $table->integer('responsable_actualizacion')->unsigned();
            $table->integer('revisado_por')->unsigned();
            $table->integer('empresa_id')->unsigned();
            $table->text('evaluacion_cumplimiento_primer_semestre');            
            $table->text('evaluacion_cumplimiento_segundo_semestre');
            $table->string('codigo');
            $table->string('version');
            $table->string('fecha');

            $table->foreign('responsable_actualizacion')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('revisado_por')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('empresa_id')
                  ->references('id')->on('empresa')
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
        Schema::dropIfExists('t3');
    }
}
