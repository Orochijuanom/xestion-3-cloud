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
            $table->string('responsable_planificacion_presupuesto');
            $table->string('cargo_planificacion');
            $table->date('fecha_revision_presupuesto_primer_semestre');
            $table->string('responsable_revision_presupuesto_primer_semestre');
            $table->string('cargo_responsable_revision_primer_semestre');
            $table->text('analisis_revision_primer_semestre');
            $table->date('fecha_revision_presupuesto_segundo_semestre');
            $table->string('responsable_revision_presupuesto_segundo_semestre');
            $table->string('cargo_responsable_revision_segundo_semestre');
            $table->text('analisis_revision_segundo_semestre');
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
