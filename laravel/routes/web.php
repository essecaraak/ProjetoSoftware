<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastro_login_controller;
use App\Http\Controllers\viewscontroller;

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
    return view('index');
});


//tela de cadastro
route::prefix('cadastro')->group(function(){

    Route::get('/', [viewscontroller::class,'tela_cadastro'])->name('tela_cadastro');
    Route::post('/create', [cadastro_login_controller::class,'cadastro'])->name('cadastro-create');

});

//tela de login

route::prefix('login')->group(function(){

    route::get('/',[viewscontroller::class,'tela_login'])->name('tela_login');

});

Route::get('/cliente/contatos', function () {
    return view('/cliente/contatos');
});

Route::get('/cliente/pedidos', function () {
    return view('/cliente/pedidos');
});

Route::get('/cliente/endereco', function () {
    return view('/cliente/endereco');
});

Route::get('/cliente/novo_endereco', function () {
    return view('/cliente/novo_endereco');
});

Route::get('/cliente/favoritos', function () {
    return view('/cliente/favoritos');
});



Route::fallback(function () {
    return "Erro de rota!";
});

/*
Route::get('/', function () {

    $array = [1,2,3,4,5];
    $nome = 'gabriel';
    $idade = 31;
    return view('welcome', ['nome' => $nome, 'idade' => $idade,'array' => $array]);
});
*/


