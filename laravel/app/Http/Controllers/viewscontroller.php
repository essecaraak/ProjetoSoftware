<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\produto;
use App\Models\produto_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $produtos = produto::all();
        return view('/index',['produtos'=> $produtos]);
    }

    public function visualizar_produto(){
        return view('/visualizar_produto');
    }

    //telas do cliente

    public function tela_visualizar_produto($id){
        $produto = produto::findOrFail($id);
        $produto_compra =DB::table('produto_compra')
            ->where('fk_produto_id','=',$id)
            ->where('fk_compra_id','=',session('carrinho')->id)->get()->first();
        return view('/visualizar_produto', ['produto'=>$produto,'comprado'=>$produto_compra]);
    }
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
    public function tela_fechamento_pedido(){
        return view('/cliente/fechamento_pedido');
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
        $produtos = produto::all();

        return view('/administrador/gerenciar_produtos',['produtos'=>$produtos]);
    }
    public function tela_gerenciar_feed(){
        return view('/administrador/gerenciar_feed');
    }
    public function novo_produto(){
        return view('/administrador/novo_produto');
    }
}
