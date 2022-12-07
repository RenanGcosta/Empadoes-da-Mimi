<?php

namespace App\Http\Controllers;

use App\Models\Empada;
use App\Models\Tamanho;
use Illuminate\Http\Request;

class ProdutoController extends Controller                   
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $tamanhos = Tamanho::all()->sortBy('tamanho');      //table->model->create
        return view('produtos.create', compact('tamanhos'));
    }

    public function store(Request $request)
    {
        $input = $request->toArray();
        Empada::create($input);

        return redirect()->route('produtos.index')->with('sucesso', 'Produto Cadastrado com sucesso');
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
    

    public function edit($id)
    {
        $empada = Empada::find($id);
       // $tamanhos = Tamanho::all()->sortBy('tamanho');
        return view('produtos.edit', compact('empada'));
    }

    public function destroy($id)
    {
        $empada = Empada::find($id);
        $empada->delete();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto deletado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        $input = $request->toArray();
        $empada = Empada::find($id);
        $empada->fill($input);
        $empada->save();
        return redirect()->route('produtos.index')->with('sucesso', 'Usuário alterado com sucesso!');
    
    }
}