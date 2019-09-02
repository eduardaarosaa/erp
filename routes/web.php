<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

//Route::resource('compras', 'comprasController');
//Rotas de compras
Route::get('compras/index', 'comprasController@index')->name('index');
Route::post('compras/create', 'comprasController@create')->name('create');
Route::get('formCompra', 'comprasController@formCompra')->name('formCompra');
Route::get('/home', 'HomeController@index')->name('home');
//Rotas de estoque
Route::get('estoqueIndex', 'estoqueController@index')->name('estoqueIndex');
Route::get('formEstoque', 'estoqueController@formEstoque')->name('formEstoque');
Route::post('estoque/create', 'estoqueController@create')->name('estoqueCreate');
Route::get('estoque/ver', 'estoqueController@consulta')->name('consulta');
Route::post('estoque/busca', 'estoqueController@buscar')->name('busca');
Route::get('estoque/edit', 'estoqueController@editar')->name('editarEstoque');
Route::post('estoque/update', 'estoqueController@update')->name('update');
