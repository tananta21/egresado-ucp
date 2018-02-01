<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egresado_id')->unsigned();
            $table->integer('nivel_estudio_id')->unsigned();
            $table->string('institucion');
            $table->string('país');
            $table->string('carrera');
            $table->date('inicio');
            $table->date('fin');
            $table->boolean('estado_estudio');
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
        Schema::drop('estudios');
    }
}
