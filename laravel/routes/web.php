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
    route::prefix('cliente')->group(function(){

        Route::get('/contatos', [viewscontroller::class, 'tela_contatos'])->name('contatos');
        Route::get('/pedidos', [viewscontroller::class, 'tela_pedidos'])->name('pedidos');
        Route::get('/endereco', [viewscontroller::class, 'tela_endereco'])->name('endereco');
        Route::get('/novo_endereco', [viewscontroller::class, 'tela_novo_endereco'])->name('novo_endereco');
        Route::get('/cartao', [viewscontroller::class, 'tela_cartao'])->name('cartao');
        Route::get('/novo_cartao', [viewscontroller::class, 'tela_novo_cartao'])->name('novo_cartao');
    
    });
    

});



// rotas para acesso do atendente
route::middleware([verificaatendente::class])->group(function(){

    //Route Atendente

    route::prefix('atendente')->group(function(){
        Route::get('/', [viewscontroller::class, 'tela_atendente'])->name('atendente-index');

        route::prefix('compra')->group(function(){

            Route::get('/alterar-status', [CompraController::class, 'AlterarStatus'])->name('compra-alterar-status');
        });
    });

});



// rotas para acesso do administrador
route::middleware([verificaadministrador::class])->group(function(){

    //Administrador
    route::prefix('administrador')->group(function(){

        Route::get('/gerenciar_produtos', [viewscontroller::class, 'tela_administrador'])->name('administrador-index');
        Route::get('/gerenciar_feed', [viewscontroller::class, 'tela_gerenciar_feed'])->name('gerenciar-feed');
        
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

Route::get('/',[viewscontroller::class,'tela_index'])->name('index');

Route::get('/login/destroy', [cadastro_login_controller::class,'logout'])->name('login-destroy');


//Route Opcional - Favoritos
//Route::get('/cliente/favoritos', function () {
//    return view('/cliente/favoritos');
//});


//Route tratamento de Erros

Route::fallback(function () {
    return "Erro de rota!";
});



