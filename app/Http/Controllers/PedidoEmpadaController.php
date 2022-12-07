<?php

namespace App\Http\Controllers;

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
}
