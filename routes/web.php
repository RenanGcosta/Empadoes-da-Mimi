<?php

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


Route::get('/funcionarios/create', function (){ return view('funcionarios.create'); });
Route::get('/funcionarios/index', function (){ return view('funcionarios.index');});

Route::get('/produtos/index', function (){ return view('produtos.index'); });
Route::get('/produtos/create', function(){ return view('produtos.create');});

Route::get('/pedidos/index', function (){ return view('pedidos.index'); });
Route::get('/pedidos/create', function (){ return view('pedidos.create'); });

Route::get('/', function (){ return view('dashboard.index'); });
Route::get('/dasboard/index', function (){ return view('dashboard.index'); });

Route::get('/login/index', function(){ return view('login.index');});