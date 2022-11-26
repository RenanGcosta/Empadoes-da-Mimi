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

    //INSERT create.usuarios
    public function store(Request $request)
    {
        $input = $request->toArray();
        User::create($input);
        // dd($request);
    }

    //SELECT index.usuarios
    public function index(Request $request)
    {
        $users = User::where('nome', 'like', '%' .
        $request->buscaUser . '%')->orderby('nome', 'asc')->paginate(5);
    
        $totalUsers = User::all()->count();
        return view('usuarios.index', compact('users', 'totalUsers'));
    }
}
