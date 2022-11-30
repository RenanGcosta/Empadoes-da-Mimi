<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/edit/{id}', [UsuarioController::class,'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UsuarioController::class,'update'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UsuarioController::class,'destroy'])->name('usuarios.destroy');
/*-------------------------------------------------------------------------------------------*/ 
Route::get('produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('produtos', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get("produtos/", [ProdutoController::class, 'index'])->name('produtos.index');
/*-------------------------------------------------------------------------------------------*/ 
Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/layout/question', [PedidoController::class, 'index'])->name('question.index');


Route::get('/pedidos/index', function (){ return view('pedidos.index'); });
//Route::get('/pedidos/create', function (){ return view('pedidos.create'); });


Route::get('/', function (){ return view('dashboard.index'); });
Route::get('/dasboard/index', function (){ return view('dashboard.index'); });