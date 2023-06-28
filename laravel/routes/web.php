<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    cadastro_login_controller,
    viewscontroller,
    AtendenteController,
    CompraController
};
use App\Http\Middleware\verificaadministrador;
use App\Http\Middleware\verificaatendente;
use App\Http\Middleware\verificacliente;
use App\Http\Middleware\verificalogado;


// rotas para acesso do cliente
route::middleware([verificacliente::class])->group(function(){

    //Cliente
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

});



// rotas para acesso do atendente
route::middleware([verificaatendente::class])->group(function(){

    //Route Atendente
    route::prefix('atendente')->group(function(){
        Route::get('/', [AtendenteController::class, 'Index'])->name('atendente_index');
    });

    route::prefix('compra')->group(function(){
        Route::get('/alterar-status', [CompraController::class, 'AlterarStatus'])->name('alterar_status_compra');
    });

    //Atendente
    Route::get('/atendente/index', function () {
        return view('/atendente/index');
    });

});



// rotas para acesso do administrador
route::middleware([verificaadministrador::class])->group(function(){

    //Administrador
    Route::get('/administrador/gerenciar_produtos', function () {
        return view('/administrador/gerenciar_produtos');
    })->name('administrador-index');

    Route::get('/administrador/gerenciar_feed', function () {
        return view('/administrador/gerenciar_feed');
    });

});




// rotas para acesso deslogado
route::middleware([verificalogado::class])->group(function(){

    //Route Controlar Cadastro
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

});


// Rotas de acesso global


//Route retorna View
Route::get('/', function () {
    return view('index');
})->name('index');



//Route Opcional - Favoritos
//Route::get('/cliente/favoritos', function () {
//    return view('/cliente/favoritos');
//});


//Route tratamento de Erros
Route::fallback(function () {
    return "Erro de rota!";
});



