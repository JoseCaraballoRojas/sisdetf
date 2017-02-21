<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHistorialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accion',20);
            $table->string('descripcion',100);
            $table->dateTime('fechaHora');
            $table->integer('idUsuarioFK')->unsigned();
            //relaciones de llaves foraneas...
            $table->foreign('idUsuarioFK')->references('id')->on('usuarios')->onDelete('cascade');
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
        Schema::drop('historiales');
    }
}
