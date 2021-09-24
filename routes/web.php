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
| Author: Denilson!
*/

Route::get('/', function () {
    return view('welcome'); 
});
//Rotas para registo no banco de dados e particularmente na tabela produtos!
Route::get('/produtos/novo', 'ProdutoController@create');
Route::post('/produtos/novo', 'ProdutoController@store')->name('registar_produto');
//Rotas para visualiar um dados identidicado pelo id, vindo da base de dados e postando os mesmo no formulio

Route::get('/produtos/ver/{id}', 'ProdutoController@show'); 
