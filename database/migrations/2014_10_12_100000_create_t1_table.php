<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateT1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logo');
            $table->string('nombre_empresa');
            $table->string('codigo');
            $table->string('version');
            $table->timestamp('fecha');                                    
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t1');
    }
}
