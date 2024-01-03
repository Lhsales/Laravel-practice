<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin;

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

Route::controller(Controllers\HomeController::class)->group(function(){
    Route::get('/', 'Index')->name('home');
});

Route::get('/contato/{id?}', ['uses'=>'App\Http\Controllers\ContatoController@Index'])->name('contato');
Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@Criar']);
Route::put('/contato', ['uses'=>'App\Http\Controllers\ContatoController@Editar']);

Route::controller(Admin\CursoController::class)->group(function(){
    Route::get('/admin/cursos', 'Index')->name('admin.cursos');
    Route::get('/admin/cursos/adicionar', 'Adicionar')->name('admin.cursos.adicionar');
    Route::post('/admin/cursos/salvar', 'Salvar')->name('admin.cursos.salvar');
    Route::get('/admin/cursos/editar/{id}', 'Editar')->name('admin.cursos.editar');
    Route::post('/admin/cursos/atualizar/{id}', 'Atualizar')->name('admin.cursos.atualizar');
    Route::get('/admin/cursos/deletar/{id}', 'Deletar')->name('admin.cursos.deletar');
});

