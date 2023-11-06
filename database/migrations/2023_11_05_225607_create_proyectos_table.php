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
    Schema::create('proyectos', function (Blueprint $table) {
      $table->id();
      $table->string('imagen'); // Puedes usar el tipo 'string' para la ruta de la imagen.
      $table->string('titulo');
      $table->string('lenguaje');
      $table->string('enlace_codigo');
      $table->string('enlace_pagina');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('proyectos');
  }
};
