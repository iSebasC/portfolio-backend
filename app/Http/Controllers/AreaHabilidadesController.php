<?php

namespace App\Http\Controllers;

use App\Models\AreaHabilidades;
use Illuminate\Http\Request;

class AreaHabilidadesController extends Controller
{
  public function index()
  {
    $areasHabilidades = AreaHabilidades::all();

    return response()->json($areasHabilidades);
  }
}
