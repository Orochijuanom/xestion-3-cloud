<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT9DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t9_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('musculo_esquletico');
            $table->string('dermatologico');
            $table->string('respiratorio');
            $table->string('cardio_vascular');
            $table->string('trabajo_en_alturas');
            $table->string('test_de_fobias');
            $table->string('otro');
            $table->string('espirometria');
            $table->string('audiometria');
            $table->string('optometria');
            $table->string('visiometria');
            $table->string('electrocardiograma');
            $table->string('examen_coordinacion_motriz');
            $table->string('examen_de_psicologia');
            $table->string('otro1');
            $table->string('cuadro_hematico');
            $table->string('glicemia_pre_y_pos');
            $table->string('perfil_lipidico');
            $table->string('parcial_de_orina');
            $table->string('otro2');
            $table->string('tetanos_td');
            $table->string('fiebre_amarilla');
            $table->string('hepatitis_b');
            $table->string('antirrabica');
            $table->string('otra3');

            $table->integer('cargo_id')->unsigned();
            $table->foreign('cargo_id')
                  ->references('id')->on('cargo')
                  ->onUpdate('no action')
                  ->onDelete('restrict');
            

            $table->integer('t9_id')->unsigned();
            $table->foreign('t9_id')
                  ->references('id')->on('t9')
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
        Schema::dropIfExists('t9_detalle');
    }
}
