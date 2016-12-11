<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT6DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t6_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_t6');
            $table->integer('nombre_quien_reporta')->unsigned();
            $table->string('area_proyecto');
            $table->string('descripcion_solicitud');
            $table->string('fuente_accion');
            $table->string('tipo');
            $table->string('prioridad_intervencion');
            $table->string('acciones_desarrolladas');
            $table->string('ap');
            $table->string('ac');
            $table->string('om');
            $table->string('ua');
            $table->string('c');
            $table->integer('responsable_cierre')->unsigned();
            $table->date('fecha_compromiso_cierre');
            $table->date('fecha_cierre');
            $table->string('oportuno');
            $table->string('eficaz');
            $table->string('evidencia');

            $table->foreign('nombre_quien_reporta')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('responsable_cierre')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t6_id')->unsigned();
            $table->foreign('t6_id')
                  ->references('id')->on('t6')
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
        Schema::dropIfExists('t6_detalle');
    }
}
