<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapacitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capacitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_capacitacion_id')->unsigned()->nullable();
            $table->text('nombre')->nullable();
            $table->text('organizacion')->nullable();
            $table->text('inscripcion')->nullable();
            $table->text('inicio_fin')->nullable();
            $table->text('sede')->nullable();
            $table->text('horario')->nullable();
            $table->text('objetivo')->nullable();
            $table->text('metodologia')->nullable();
            $table->text('dirigido')->nullable();
            $table->text('precio')->nullable();
            $table->text('lugar_contacto')->nullable();
            $table->text('telefono')->nullable();
            $table->text('celular')->nullable();
            $table->text('correo')->nullable();
            $table->boolean('is_active')->nullable();
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
        Schema::drop('capacitaciones');
    }
}
