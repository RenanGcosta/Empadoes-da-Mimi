<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Usuario::create($input);
       // dd($request);
    }
}