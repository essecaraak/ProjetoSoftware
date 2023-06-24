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

//tela inicial
Route::get('/', [viewscontroller::class, 'tela_index'])->name('index');


//tela de cadastro
route::prefix('cadastro')->group(function(){

    Route::get('/', [viewscontroller::class,'tela_cadastro'])->name('tela_cadastro');
    Route::post('/store', [cadastro_login_controller::class,'cadastro'])->name('cadastro-store');
    

});

//tela de login
route::prefix('login')->group(function(){

    Route::get('/',[viewscontroller::class,'tela_login'])->name('tela_login');
    Route::post('/store', [cadastro_login_controller::class,'login'])->name('login-store');
    Route::get('/destroy', [cadastro_login_controller::class,'logout'])->name('login-destroy');

});

//Route Retorna View
Route::get('/', function () {
    return view('index');
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

Route::get('/cliente/cartao', function () {
    return view('/cliente/cartao');
});

Route::get('/cliente/novo_cartao', function () {
    return view('/cliente/novo_cartao');
});

//Route Opcional - Favoritos
//Route::get('/cliente/favoritos', function () {
//    return view('/cliente/favoritos');
//});


//Route tratamento de Erros
Route::fallback(function () {
    return "Erro de rota!";
});



