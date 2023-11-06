<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Insertar registros iniciales
        DB::table('area_habilidades')->insert([
            ['nombre_area' => 'Desarrollador Back End'],
            ['nombre_area' => 'Desarrollador Front End'],
            ['nombre_area' => 'Base de Datos'],
            ['nombre_area' => 'Diseño Gráfico Digital'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //
    }
};
