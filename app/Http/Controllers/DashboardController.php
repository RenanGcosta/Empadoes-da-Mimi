<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Empada;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalProdutos = Empada::all()->count();

        return view('dashboard.index', compact('totalProdutos'));
    }
}