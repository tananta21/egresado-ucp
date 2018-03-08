<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarreraOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras_oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oferta_laboral_id')->unsigned()->nullable();
            $table->integer('escuela_id')->unsigned()->nullable();
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
        Schema::drop('carreras_oferta');
    }
}
