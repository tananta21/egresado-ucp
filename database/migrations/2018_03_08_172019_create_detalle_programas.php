<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleProgramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_programas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egresado_id')->unsigned()->nullable();
            $table->integer('programa_id')->unsigned()->nullable();
            $table->integer('nivel_capacidad_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_programas');
    }
}
