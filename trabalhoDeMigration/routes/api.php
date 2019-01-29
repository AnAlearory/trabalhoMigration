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

Route::post('/clientes', 'ClientesController@create');

Route::get('/getClientes', 'ClientesController@list');

Route::put('/putClientes/{id}', 'ClientesController@update');

Route::delete('/delClientes/{id}', 'ClientesController@delete');

Route::post('/livros', 'LivrosController@create');

Route::get('/getLivros', 'LivrosController@list');

Route::put('/putLivros/{id}', 'LivrosController@update');

Route::delete('/delLivros/{id}', 'LivrosController@delete');