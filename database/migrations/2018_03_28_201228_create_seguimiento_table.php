<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimiento_egresado', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_work')->nullable();
            $table->boolean('egresado_id')->unsigned()->nullable();
            $table->boolean('situacion_laboral_id')->unsigned()->nullable();
            $table->integer('disponibilidad_id')->unsigned()->nullable();
            $table->integer('sector_trabajo_id')->unsigned()->nullable();
            $table->integer('satisfaccion_id')->unsigned()->nullable();
            $table->text('empresa')->nullable();
            $table->text('rubro')->nullable();
            $table->text('cargo')->nullable();
            $table->text('telefono')->nullable();
            $table->text('pagina_web')->nullable();
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
        Schema::drop('seguimiento_egresado');
    }
}
