<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCausasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('causa',100);
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
        Schema::drop('causas');
    }
}
