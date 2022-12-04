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

    public function index(Request $request)

    {
        $clientes = Cliente::where('nome', 'like', '%' .
        $request->buscaCliente . '%')->orderby('nome', 'asc')->paginate(5);
        $totalClientes = Cliente::all()->count();
        return view('clientes.index', compact('clientes', 'totalClientes'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Cliente::create($input);
        return redirect()->route('clientes.index')->with('sucesso', 'Cliente Cadastrado com sucesso');
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function question()
    {
        return view('question');
    }
    public function edit($id)
    { 
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->toArray();
        $clientes = Cliente::find($id);
        $clientes->fill($input);
        $clientes->save();
        return redirect()->route('clientes.index')->with('sucesso', 'Dados do cliente foram alterado com sucesso!');
    }
}