<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clientes', 'ClientesController@create')->name('criar_clientes');

Route::get('/clientes', 'ClientesController@list')->name('mostrar_clientes');

Route::put('/clientes/{id}', 'ClientesController@update')->name('atualizar_clientes');

Route::delete('/clientes/{id}', 'ClientesController@delete')->name('deletar_clientes');

Route::post('/livros', 'LivrosController@create')->name('criar_livros');

Route::get('/livros', 'LivrosController@list')->name('mostrar_livros');

Route::put('/livros/{id}', 'LivrosController@update')->name('atualizar_livros');

Route::delete('/livros/{id}', 'LivrosController@delete')->name('deletar_livros');

Route::apiResource('/emprestimo', 'EmprestimoController');