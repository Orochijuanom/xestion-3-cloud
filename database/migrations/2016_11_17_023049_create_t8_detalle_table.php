<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT8DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t8_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apellidos_nombres')->unsigned();
            $table->string('centro_trabajo');
            $table->string('tipo_examen');
            $table->date('fecha_examen');
            $table->string('musculo_esqueletico');
            $table->string('dermatologico');
            $table->string('respiratorio');
            $table->string('cardiovascular');
            $table->string('trabajo_alturas');
            $table->string('test_fobias_trabajo_alturas');
            $table->string('otro');
            $table->string('espirometria');
            $table->string('audiometria');
            $table->string('optometria');
            $table->string('visiometria');
            $table->string('electrocardiograma');
            $table->string('examen_coordinacion_motriz');
            $table->string('examen_psicologia');
            $table->string('otro_complementario');
            $table->string('cuadro_hematico');
            $table->string('glicemia_pre_pos');
            $table->string('perfil_lipido');
            $table->string('parcial_orina');
            $table->string('otro_laboratorio');
            $table->string('tetanos');
            $table->string('fiebre_amarilla');
            $table->string('hepatitis_b');
            $table->string('antirrabica');
            $table->string('otro_vacuna');
            $table->string('pve_requerido');
            $table->string('recomendaciones');
            $table->string('restricciones');
            $table->string('remision_eps');
            $table->date('fecha_compromiso_asistencia_eps');
            $table->date('asistencia_eps');

            $table->foreign('apellidos_nombres')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->foreign('t8_id')
                  ->references('id')->on('t8')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            $table->integer('t8_id')->unsigned();
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
        Schema::dropIfExists('t8_detalle');
    }
}
