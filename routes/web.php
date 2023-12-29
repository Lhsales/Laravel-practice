<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato/{id?}', ['uses'=>'App\Http\Controllers\ContatoController@Index']);
Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@Criar']);
Route::put('/contato', ['uses'=>'App\Http\Controllers\ContatoController@Editar']);

