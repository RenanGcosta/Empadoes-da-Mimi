<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('clientes.index');
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Cliente::create($input);
        return redirect()->route('/dashboard/index')->with('sucesso', 'Usuário Cadastrado com sucesso');
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function question()
    {
        return view('question');
    }
}