<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoEmpadaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
use App\Models\Pedido;
use App\Models\PedidoEmpada;
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
Route::put('produtos/{id}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
/*-------------------------------------------------------------------------------------------*/ 
Route::get('/pedidos/create/{id}', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/edit/{id}', [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{id}', [PedidoController::class, 'update'])->name('pedidos.update');

// Route::get('/pedidos/edit/{id}', [PedidoEmpadaController::class, 'edit'])->name('pedidos.edit');
// Route::put('/pedidos/{id}', [PedidoEmpadaController::class, 'update'])->name('pedidos.update');

/*-------------------------------------------------------------------------------------------*/ 
Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
/*-------------------------------------------------------------------------------------------*/ 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
/*-------------------------------------------------------------------------------------------*/ 
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/edit/{id}', [ClienteController::class,'edit'])->name('clientes.edit');
Route::put('/clientes/{id}', [ClienteController::class,'update'])->name('clientes.update');
/*-------------------------------------------------------------------------------------------*/ 