<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empada;
use App\Models\Pagamento;
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

    public function create($id_cliente)
    {
        $tamanhos = Tamanho::all()->sortBy('tamanho');
        $empadas = Empada::all()->sortBy('empada');
        $pagamentos = Pagamento::all()->sortBy('pagamento');
        $cliente = Cliente::find($id_cliente);
        return view ('pedidos.create', compact('tamanhos', 'empadas', 'pagamentos', 'cliente'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        $empadas = Empada::all();
        $input['valor_total'] = 0;
        foreach ($empadas as $empada){
            if(isset($input['empada'.$empada->id])){
                $total = $input['quantidade'.$empada->id] * $empada->valor;
                $input['valor_total'] = $input['valor_total'] + $total;
            }
        }

        $idpedido = Pedido::create($input);
       
        foreach ($empadas as $empada){
            if(isset($input['empada'.$empada->id])){
                $item['id_pedido'] = $idpedido->id;
                $item['id_empada'] = $empada->id;
                $item['quantidade'] = $input['quantidade'.$empada->id];
                PedidoEmpada::create($item);
            }
        }
        return redirect()->route('pedidos.index')->with('sucesso', 'Pedido cadatrado com Sucesso!');
    }

    public function index()
    {
        return view('pedidos.index');
    }

    public function edit($id)
    {

        $pedido = Pedido::find($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->toArray();
        $pedido = Pedido::find($id);
        $pedido->fill($input);
        $pedido->save();
        return redirect()->route('pedidos.index')->with('sucesso', 'Status Alterado com Sucesso!');
    }
}
