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
    return view('index');
});

Route::get('/cliente/cadastro', function () {
    return view('/cliente/cadastro');
});

Route::get('/cliente/login', function () {
    return view('/cliente/login');
});

Route::get('/cliente/contatos', function () {
    return view('/cliente/contatos');
});

Route::get('/cliente/pedidos', function () {
    return view('/cliente/pedidos');
});

Route::get('/cliente/dados', function () {
    return view('/cliente/dados');
});

Route::get('/cliente/endereco', function () {
    return view('/cliente/endereco');
});

Route::get('/cliente/favoritos', function () {
    return view('/cliente/favoritos');
});




/*
Route::get('/', function () {

    $array = [1,2,3,4,5];
    $nome = 'gabriel';
    $idade = 31;
    return view('welcome', ['nome' => $nome, 'idade' => $idade,'array' => $array]);
});
*/


