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
            $table->integer('egresado_id')->unsigned()->nullable();
            $table->integer('tipo_experiencia_id')->unsigned()->nullable();
            $table->string('empresa')->nullable();
            $table->string('rubro')->nullable();
            $table->string('puesto')->nullable();
            $table->string('nivel_puesto')->nullable();
            $table->string('area_laboral')->nullable();
            $table->string('salario')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fin')->nullable();
            $table->text('descripcion')->nullable();
            $table->boolean('estado_trabajo')->nullable();
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
