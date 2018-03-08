<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfertaLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta_laboral', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disponibilidad_id')->unsigned()->nullable();
            $table->text('nombre_empresa')->nullable();
            $table->text('ruc_empresa')->nullable();
            $table->text('cargo')->nullable();
            $table->integer('nro_vacantes')->nullable();
            $table->text('area')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('duracion')->nullable();
            $table->text('salario')->nullable();
            $table->text('comentario')->nullable();

            $table->text('estudios_minimo')->nullable();
            $table->text('experiencia_minima')->nullable();
            $table->text('caracteristicas')->nullable();
            $table->text('movilidad')->nullable();
            $table->text('is_active')->nullable();
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
        Schema::drop('oferta_laboral');
    }
}
