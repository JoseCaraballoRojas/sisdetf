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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario')->unique();
            $table->string('password');
            $table->string('nombre',60);
            $table->string('apellido',60);
            $table->integer('cedula');
            $table->enum('tipo', ['administrador','operador'])->default('operador');
            $table->enum('estatus', ['activo','inactivo'])->default('activo');
            $table->rememberToken();
            $table->timestamps();
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
