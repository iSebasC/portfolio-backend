<?php

use App\Http\Controllers\AreaHabilidadesController;
use App\Http\Controllers\PerfilController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/profile', [PerfilController::class, 'index']);
Route::post('/profile/save', [PerfilController::class, 'store']);


Route::get('/my-career-field', [AreaHabilidadesController::class, 'index']);

