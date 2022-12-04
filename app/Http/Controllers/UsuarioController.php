<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
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
        $input['password'] = bcrypt($input['password']);
        User::create($input);
        return redirect()->route('usuarios.index')->with('sucesso', 'Usuário Cadastrado com sucesso');
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

    public function edit($id)
    {
        $user = User::find($id);
        return view('usuarios.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->toArray();
        $users = User::find($id);
    

        $users->fill($input);
        $users->save();
        return redirect()->route('usuarios.index')->with('sucesso', 'Usuário alterado com sucesso!');
    }
    
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('usuarios.index')->with('sucesso', 'Usuário deletado com sucesso!');
    }
}