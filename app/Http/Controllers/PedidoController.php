<?php

namespace App\Http\Controllers;

use App\Models\Empada;
use App\Models\Pedido;
use App\Models\PedidoEmpada;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $tamanhos = Tamanho::all()->sortBy('tamanho');
        $empadas = Empada::all()->sortBy('empada');
        return view ('pedidos.create', compact('tamanhos', 'empadas'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        $idpedido = Pedido::create($input) ;
        foreach ($input['empadas'] as $empada){
            $item['id_pedido'] = $idpedido;
            $item['id_empada'] = $empada;
            PedidoEmpada::create($item);
        }
    }

    public function index()
    {
        return view('pedidos.index');
    }

    
}
