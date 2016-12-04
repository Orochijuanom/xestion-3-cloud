<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('version');
            $table->date('fecha');
            $table->string('presupuesto_anio');
            $table->date('fecha_asignacion_presupuesto');
            $table->integer('responsable_planificacion_presupuesto')->unsigned();
            $table->date('fecha_revision_presupuesto_primer_semestre');
            $table->integer('responsable_revision_presupuesto_primer_semestre')->unsigned();
            $table->text('analisis_revision_primer_semestre');
            $table->date('fecha_revision_presupuesto_segundo_semestre');
            $table->integer('responsable_revision_presupuesto_segundo_semestre')->unsigned();
            $table->text('analisis_revision_segundo_semestre');


            $table->foreign('responsable_planificacion_presupuesto', 'planificacion-empleado')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('responsable_revision_presupuesto_primer_semestre', 'responsable-rev1-empleado')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            
            $table->foreign('responsable_revision_presupuesto_segundo_semestre', 'responsable-rev2-empleado')
                  ->references('id')->on('empleados')
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
        Schema::dropIfExists('t2');
    }
}
