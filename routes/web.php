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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get( /*URL */'/usuarios', 'App\Http\Controllers\UsuariosController@lista')->name( /* vai ser a ROTA */'usuarios');


Route::get('/usuarios/criar', 'App\Http\Controllers\UsuariosController@criar')->name('usuarios-criar');


/* criaruser essa parte sempre é a função*/
Route::post('/usuarios/criado,', 'App\Http\Controllers\UsuariosController@criaruser')->name('usuarios-criado');

Route::get('/usuarios/info/{id}', 'App\Http\Controllers\UsuariosController@usuariosinfo')->name('usuarios-info');



//PUT É PARA UPDATE < mais recomendado
Route::put('usuarios/update/{id}', 'App\Http\Controllers\UsuariosController@usuariosupdate')->name('usuario-update');


Route::delete('usuarios/delete/{id}', 'App\Http\Controllers\UsuariosController@usuariosdelete')->name('usuarios-delete');



















// Route::get('/teste/novo', 'App\Http\Controllers\Controller@indexNova')->name('ind');


// Route::get('/teste/teste/cals/novo', 'App\Http\Controllers\UsuariosController@indexNovaCals')->name('index-cals');

// Route::post('/envio/form', 'App\Http\Controllers\UsuariosController@envioForm')->name('form');