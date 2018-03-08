<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad_trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->nullable();
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
        Schema::drop('disponibilidad_trabajo');
    }
}
