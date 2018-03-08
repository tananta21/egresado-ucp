<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_usuario_id')->unsigned();
            $table->integer('egresado_id')->unsigned()->nullable();
            $table->string('slug')->nullable();
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->nullable();
            $table->string('password', 60);
            $table->text('url_imagen');
            $table->boolean('is_active')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
