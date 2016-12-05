<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT3DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t3_detalle', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('norma');
            $table->string('numero_norma');
            $table->string('fecha_publicacion');
            $table->string('emisor');
            $table->string('articulo');
            $table->string('descripcion_obligacion');
            $table->string('palabra_clave');
            $table->string('aplica');
            $table->string('cumple');
            $table->string('como_cumple');

            $table->integer('responsable_cumplimiento')->unsigned();
            $table->foreign('responsable_cumplimiento')
                  ->references('id')->on('empleados')
                  ->onUpdate('no action')
                  ->onDelete('restrict');

            $table->integer('t3_id')->unsigned();
            $table->foreign('t3_id')
                  ->references('id')->on('t3')
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
        Schema::dropIfExists('t3_detalle');
    }
}
