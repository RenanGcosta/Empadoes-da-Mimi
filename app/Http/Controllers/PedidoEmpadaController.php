<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\PedidoEmpada;
use Illuminate\Http\Request;

class PedidoEmpadaController extends Controller
{
    public function edit($id)
    {
       // $pedido = Pedido::find($id);
        $pedido = PedidoEmpada::find($id);
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
