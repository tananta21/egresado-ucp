<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProgramaOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_ofertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oferta_laboral_id')->unsigned()->nullable();
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
        Schema::drop('programa_ofertas');
    }
}
