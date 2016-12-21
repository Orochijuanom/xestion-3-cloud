<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT44PlanificarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t44_planificar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('actividad');
            $table->string('ene_p');
            $table->string('ene_e');
            $table->string('feb_p');
            $table->string('feb_e');
            $table->string('mar_p');
            $table->string('mar_e');
            $table->string('abr_p');
            $table->string('abr_e');
            $table->string('may_p');
            $table->string('may_e');
            $table->string('jun_p');
            $table->string('jun_e');
            $table->string('jul_p');
            $table->string('jul_e');
            $table->string('ago_p');
            $table->string('ago_e');
            $table->string('sep_p');
            $table->string('sep_e');
            $table->string('oct_p');
            $table->string('oct_e');
            $table->string('nov_p');
            $table->string('nov_e');
            $table->string('dic_p');
            $table->string('dic_e');
            $table->string('evidencias');

            $table->integer('responsable_plan_id')->unsigned();
            $table->foreign('responsable_plan_id')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t44_id')->unsigned();
            $table->foreign('t44_id')
                  ->references('id')->on('t44')
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
        Schema::dropIfExists('t44_planificar');
    }
}
