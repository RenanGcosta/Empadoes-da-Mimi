<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
        User::create($input);
        // dd($request);
    }

    //SELECT
    public function index(Request $request)
    {
        $usuarios = User::where('nome', 'like', '%' .
        $request->buscaUsuario . '%')->orderby('nome', 'asc')->paginate(5);
    
        $totalUsuarios = User::all()->count();

        return view('usuarios.index', compact('usuarios', 'totalUsuarios'));
    }
}
