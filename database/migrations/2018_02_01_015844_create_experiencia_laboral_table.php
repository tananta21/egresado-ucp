<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciaLaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencia_laboral', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egresado_id')->unsigned();
            $table->integer('tipo_experiencia')->unsigned();
            $table->string('empresa');
            $table->string('rubro');
            $table->string('puesto');
            $table->string('nivel_puesto');
            $table->string('area_laboral');
            $table->string('salario');
            $table->date('inicio');
            $table->date('fin');
            $table->boolean('estado_trabajo');
            $table->text('descripcion');
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
        Schema::drop('experiencia_laboral');
    }
}
