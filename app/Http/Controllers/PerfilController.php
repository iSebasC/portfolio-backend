<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function index()
    {
      $perfil = Perfil::all();
      return response()->json($perfil);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'area' => 'required',
            'cv' => 'required|mimes:pdf'
        ]);

        $cvPath = $request->file('cv')->getRealPath();
        $cv = Cloudinary::upload($cvPath, [
            'folder' => 'cvs',
            'resource_type' => 'auto'
        ]);

        $data['cv'] = $cv->getSecurePath();

        $perfil = Perfil::create($data);

        return response()->json($perfil, 201);
    }
}
