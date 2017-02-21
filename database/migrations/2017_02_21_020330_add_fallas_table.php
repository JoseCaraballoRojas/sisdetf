<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fallas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('falla', 100);
            $table->string('descripcion', 200);
            $table->integer('idTipoFK')->unsigned();
            //relaciones de llaves foraneas...
            $table->foreign('idTipoFK')->references('id')->on('tipos')->onDelete('cascade');
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
        Schema::drop('fallas');
    }
}
