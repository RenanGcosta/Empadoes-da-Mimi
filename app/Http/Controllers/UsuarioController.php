<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuarios.create');
    }

    //INSERT
    public function store(Request $request)
    {
        $input = $request->toArray();
        Usuario::create($input);
        // dd($request);
    }

    //SELECT
    public function index(Request $request)
    {
        $usuarios = Usuario::where('nome', 'like', '%' .
        $request->buscaUsuario . '%')->orderby('nome', 'asc')->paginate(5);
    
        $totalUsuarios = Usuario::all()->count();

        return view('usuarios.index', compact('usuarios', 'totalUsuarios'));
    }
}
