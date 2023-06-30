<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use Illuminate\Http\Request;

class viewscontroller extends Controller
{

    // telas deslogadas
    public function tela_cadastro(){
        return view('/cliente/cadastro');
    }

    public function tela_login(){
        return view('/cliente/login');
    }

    public function tela_index(){
        return view('/index');
    }

    //telas do cliente

    public function tela_contatos(){
        return view('/cliente/contatos');
    }
    public function tela_pedidos(){
        return view('/cliente/pedidos');
    }
    public function tela_endereco(){
        return view('/cliente/endereco');
    }
    public function tela_novo_endereco(){
        return view('/cliente/novo_endereco');
    }
    public function tela_cartao(){
        return view('/cliente/cartao');
    }
    public function tela_novo_cartao(){
        return view('/cliente/novo_cartao');
    }


    //telas do atendente

    public function tela_atendente(){
        $compras = Compras::query()
            ->with(['comprador', 'atendente', 'cartao', 'endereco'])
            ->where('status', '!=', 'compra finalizada')
            ->where('status', '!=', 'compra cancelada')
            ->get();
        return view('/atendente/index')->with('compras', $compras);
    }



    //telas do administrador

    public function tela_administrador(){
        return view('/administrador/gerenciar_produtos');
    }
    public function tela_gerenciar_feed(){
        return view('/administrador/gerenciar_feed');
    }
    public function novo_produto(){
        return view('/administrador/novo_produto');
    }
}
