<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soluciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('solucion',100);
            $table->string('descripcion',200);
            $table->integer('idFallaFK')->unsigned();
            //relaciones de llaves foraneas...
            $table->foreign('idFallaFK')->references('id')->on('fallas')->onDelete('cascade');
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
        Schema::drop('soluciones');
    }
}
