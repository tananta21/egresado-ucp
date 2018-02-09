<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEgresadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egresados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('escuela_id')->unsigned()->nullable();
            $table->integer('semestre_id')->unsigned()->nullable();
            $table->integer('estado_civil')->unsigned()->nullable();
            $table->string('slug')->nullable();
            $table->integer('codigo')->nullable();
            $table->integer('dni')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->integer('tel_fijo')->nullable();
            $table->integer('tel_celular')->nullable();
            $table->string('pagina_web')->nullable();
            $table->text('url_imagen')->nullable();
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
        Schema::drop('egresados');
    }
}
