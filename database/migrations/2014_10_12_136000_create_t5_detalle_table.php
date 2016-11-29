<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT5DetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t5_detalle', function (Blueprint $table) {


            $table->increments('id');
            $table->string('elemento_casco');
            $table->string('casco_ciclista');
            $table->string('casco_motociclista');
            $table->string('casco_tipo2');
            $table->string('chavito');
            $table->string('gafas_claras');
            $table->string('gafas_oscuras');
            $table->string('tapaoidos_de_insercion');            
            $table->string('tapaoidos_copa');
            $table->string('camisa');
            $table->string('pantalon');
            $table->string('peto_de_caucho');
            $table->string('peto_de_carnaza');
            $table->string('chaleco_reflectivo');
            $table->string('kit_motociclista');
            $table->string('bota_de_seguridad');
            $table->string('bota_de_caucho');
            $table->string('zapato_antideslizante');
            $table->string('mascarilla_desechable');            
            $table->string('guantes_de_latex');
            $table->string('guantes_de_nitrillo');
            $table->string('guantes_carnaza');
            $table->string('guantes_neopreno');
            $table->string('guantes_vaquetas');
            $table->string('impermeable');
            $table->string('arnes_seguridad');
            $table->string('eslinga');
            $table->string('otros_elementos');
            


            $table->integer('t5_id')->unsigned();
            $table->foreign('t5_id')
                  ->references('id')->on('t5')
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
        Schema::dropIfExists('t5_detalle');
    }
}
