<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCellToFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fallas', function (Blueprint $table) {
            $table->string('tipo_Equipo')->nullable()->after('descripcion');
            $table->string('pregunta')->nullable()->after('idTipoFK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fallas', function (Blueprint $table) {
            $table->dropColumn(['tipo_Equipo', 'pregunta']);
        });
    }
}
