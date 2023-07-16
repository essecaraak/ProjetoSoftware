<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\Compras;
use App\Models\Endereco;
use App\Models\produto;
use App\Models\produto_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class carrinhocontroller extends Controller
{

    public function index(Request $request) {
        $produtos = produto::select('produto.*','produto_compra.quantidade as quantidade_carrinho')
            ->join('produto_compra', 'produto_compra.fk_produto_id', '=', 'produto.id')
            ->join('compra', 'produto_compra.fk_compra_id', '=', 'compra.id')
            ->where('compra.id', '=', session('carrinho')->id)
            ->get();
        $valortotal=0;
        foreach($produtos as $produto){
            $valortotal+=$produto->valor *$produto->quantidade_carrinho;
        }
        session('carrinho')->valortotal = $valortotal;
        return view('cliente\carrinho',['produtos'=> $produtos]);
    }

    public function processar(Request $request) {
        $produtos = $request->input('produtos');
        if (empty($produtos)) {
            return redirect()->back()->with('mensagem_falha', 'Selecione ao menos um produto');
        }
        $produtos = produto::select('produto.imagem','produto_compra.*')
            ->join('produto_compra', 'produto_compra.fk_produto_id', '=', 'produto.id')
            ->join('compra', 'produto_compra.fk_compra_id', '=', 'compra.id')
            ->where('compra.id', '=', session('carrinho')->id)
            ->whereIn('fk_produto_id', $produtos)
            ->get();
        
        $valortotal=0;
        foreach($produtos as $produto){
            $valortotal+=$produto->valorproduto *$produto->quantidade;
        }
        session('carrinho')->valortotal = $valortotal;
        $cartoes = Cartao::where('fk_user_id','=',session('user')->id)->get(); 
        $enderecos = Endereco::where('fk_user_id','=',session('user')->id)->get();   
        return view('cliente\fechamento_pedido',['produtos'=> $produtos, 'cartoes'=> $cartoes,'enderecos'=>$enderecos]);
    }

    public function inserir_produto(Request $request, $id){
        $produto= produto::where('id',$id)->first();
        $procom = new produto_compra();
        $procom->quantidade = $request->input('quantidade');
        $procom->valorproduto = $produto->valor;
        $procom->tipoproduto = $produto->tipo;
        $procom->nomeproduto = $produto->nome;
        $procom->fk_produto_id = $id;
        $procom->fk_compra_id = session('carrinho')->id;
        $procom->save();
        return redirect()->back()->with('mensagem_sucesso','produto adicionado com sucesso');
    }

    private  function  valor_total(){
        $produtos = produto::select('produto.*','produto_compra.quantidade as quantidade_carrinho')
            ->join('produto_compra', 'produto_compra.fk_produto_id', '=', 'produto.id')
            ->join('compra', 'produto_compra.fk_compra_id', '=', 'compra.id')
            ->where('compra.id', '=', session('carrinho')->id)
            ->get();

        $valortotal=0;
        foreach($produtos as $produto){
            $valortotal+=$produto->valor +$produto->quantidade_carrinho;
        }
        session('carrinho')->valortotal = $valortotal;
    }
}
