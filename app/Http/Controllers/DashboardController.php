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
        $totalPedidos = Pedido::all()->count();
        $totalPagamentos = Pagamento::all()->count();
        $totalClientes = Cliente::all()->count();
        return view('dashboard.index', compact('totalPedidos', 'totalPagamentos', 'totalClientes'));
    }
}