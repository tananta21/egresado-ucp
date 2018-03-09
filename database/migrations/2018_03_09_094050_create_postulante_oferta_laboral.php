<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulanteOfertaLaboral extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulante_oferta_laboral', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('egresado_id')->unsigned()->nullable();
            $table->integer('oferta_laboral_id')->unsigned()->nullable();
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
        Schema::drop('postulante_oferta_laboral');
    }
}
