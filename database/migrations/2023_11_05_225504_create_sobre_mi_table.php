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
        Schema::create('sobre_mi', function (Blueprint $table) {
          $table->id();
          $table->string('foto'); // Puedes usar el tipo 'string' para la ruta de la imagen.
          $table->text('experiencia');
          $table->text('biografia');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sobre_mi');
    }
};
