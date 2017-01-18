<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_apellidos');
            $table->string('cedula');
            $table->string('fecha_nacimiento');
            $table->string('fecha_ingreso_empresa');
            $table->string('sexo');
            $table->string('edad');
            $table->string('estado_civil');
            $table->string('n_hijos');
            $table->string('direccion_vivienda');
            $table->string('ciudad');
            $table->integer('cargo')->unsigned();
            $table->string('experiencia');            
            $table->string('profesion');
            $table->string('email');
            $table->string('jefe_inmediato');
            $table->string('area_pertenece');
            $table->string('lugar_centro_trabajo');
            $table->string('horario_trabajo');
            $table->string('grupo_sanguineo');
            $table->string('persona_contacto');
            $table->string('tel_contacto');
            $table->string('dir_contacto');
            $table->string('sueldo');
            $table->string('n_cuenta');
            $table->string('banco');
            $table->string('talla_pantalon');
            $table->string('talla_overol');
            $table->string('talla_calzado');
            $table->string('talla_camisa');
            $table->string('talla_guante');
            $table->string('talla_impermeable');
            $table->string('fecha_induccion');
            $table->string('fecha_reinducion');
            $table->string('fecha_ultimo_examen_ocupacional');
            $table->string('fecha_proximo_examen_ocupacional');
            $table->string('apto_medicamente');
            $table->string('concepto_trabaja_alturas');
            $table->string('concepto_trabaja_espacio_confinado');
            $table->string('registro_entrega_dotacion');
            $table->string('n_licencia_conduccion');
            $table->string('tetano');
            $table->string('fiebre_amarilla');
            $table->string('hepatitis');
            $table->string('antirrabica');
            $table->string('otra');
            $table->string('sst');
            $table->string('ambiente');
            $table->string('tecnicas');
            $table->string('calidad');


            $table->foreign('cargo')
                  ->references('id')->on('cargo')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('empresa_id')->unsigned();
            $table->foreign('empresa_id')
                  ->references('id')->on('empresa')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('eps')->unsigned();
            $table->foreign('eps')
                  ->references('id')->on('eps')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('arl')->unsigned();
            $table->foreign('arl')
                  ->references('id')->on('arl')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('afp')->unsigned();
            $table->foreign('afp')
                  ->references('id')->on('afp')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('caja_compensacion')->unsigned();
            $table->foreign('caja_compensacion')
                  ->references('id')->on('caja')
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
        Schema::dropIfExists('empleados');
    }
}
