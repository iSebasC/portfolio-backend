<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habilidades_del_area', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('area_id');
          $table->foreign('area_id')->references('id')->on('area_habilidades');
          $table->string('nombre_habilidad');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habilidades_del_area');
    }
};
