<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Pagamento;
use App\Models\Pedido;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
       $mes = Pedido::whereMonth('created_at', '')->count();
      // $mes =  Pedido::havingBetween('created_at', [1, 30])->count();
        $status = Pedido::where('status', 'like', 'Em Aberto')->count();
        $totalPagamentos = Pagamento::all()->count();
        $totalClientes = Cliente::all()->count();
        return view('dashboard.index', compact('status', 'totalPagamentos', 'totalClientes', 'mes'));
    }
}