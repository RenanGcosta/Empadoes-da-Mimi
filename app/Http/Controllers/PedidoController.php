<?php

namespace App\Http\Controllers;

use App\Models\Empada;
use App\Models\Pedido;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function create()
    {
        $tamanhos = Tamanho::all()->sortBy('tamanho');
        $empadas = Empada::all()->sortBy('empada');
        return view ('pedidos.create', compact('tamanhos', 'empadas'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Pedido::create($input);
    }
}