<?php

namespace App\Http\Controllers;

use App\Models\Empada;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class ProdutoController extends Controller                   
{
    public function create()
    {
        $tamanhos = Tamanho::all()->sortBy('tamanho');      //table->model->create
        return view('produtos.create', compact('tamanhos'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Empada::create($input);
    }

    public function index(Request $request)
    {
        $produtos = Empada::where('nome', 'like', '%' . $request->buscaProduto . '%')->orderby('nome', 'asc')->paginate(5);
        $totalProdutos = Empada::all()->count();
        return view('produtos.index', compact('produtos', 'totalProdutos'));
    }

    public function tamanho($id, Request $request)
    {
        $tamanho = Tamanho::find($id);
        $produtos = Empada::where('id_tamanho', $id)->where('nome', 'like', '%' . $request->buscaProduto . '%')->orderby('nome', 'asc')->get();
        $totalProdutos = Empada::where('id_tamanho', $id)->count();
        return view('produtos.index', compact('tamanho', 'produtos', 'totalProdutos'));
    }

}