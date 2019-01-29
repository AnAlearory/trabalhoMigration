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

Route::get('/clientes', 'ClientesController@list');

Route::put('/clientes/{id}', 'ClientesController@update');

Route::delete('/clientes/{id}', 'ClientesController@delete');