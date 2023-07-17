<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\Compras;
use App\Models\Endereco;
use App\Models\produto;
use App\Models\produto_compra;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

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

    public function processar_pedido(Request $request) {
        $produtos = $request->input('produtos');
        if (empty($produtos)) {
            return redirect()->back()->with('mensagem_falha', 'Selecione ao menos um produto');
        }
        
        $produtos2 = produto::select('produto.imagem as imagem' ,'produto_compra.*')
            ->join('produto_compra', 'produto_compra.fk_produto_id', '=', 'produto.id')
            ->join('compra', 'produto_compra.fk_compra_id', '=', 'compra.id')
            ->where('compra.id', '=', session('carrinho')->id)
            ->whereIn('fk_produto_id', $produtos)
            ->get();
        
        $valortotal=0;
        foreach($produtos2 as $produto){
            $valortotal+=$produto->valorproduto *$produto->quantidade;
        }
        session('carrinho')->valortotal = $valortotal;
        $cartoes = Cartao::where('fk_user_id','=',session('user')->id)->get(); 
        $enderecos = Endereco::where('fk_user_id','=',session('user')->id)->get();   
        return view('cliente\fechamento_pedido',['produtosmostrar'=>$produtos2,'produtos'=> $produtos, 'cartoes'=> $cartoes,'enderecos'=>$enderecos]);
    }

    public function finalizar_pedido(Request $request){
        $produtos = $request->input('produtos');
        produto_compra::where('fk_compra_id', '=', session('carrinho')->id)
        ->whereIn('fk_produto_id', $produtos)
        ->delete();
        $produtosretirar = produto_compra::where('fk_compra_id', '=', session('carrinho')->id)
        ->get();

        foreach($produtosretirar as $produto){
            $prodantigo= produto::where('id','=',$produto->fk_produto_id)->get()->first();
            $prodantigo->quantidade-=$produto->quantidade;
            $prodantigo->save();
        }
        if($request->pagamento =='dinheiro'){
            $troco = $request->troco-session('carrinho')->valortotal;
            if($troco<0){
                $troco=0;
            }
            session('carrinho')->troco= $troco;
            session('carrinho')->tipo_pagamento= 'dinheiro';
        
        }else if($request->pagamento == 'pix'){
            return('pagamento pelo pix');
        }else if(!is_null($request->pagamento)){
            return('pagamento em cartão');
        }else{
            return redirect()->back()->with('mensagem_falha','selecione um método de pagamento');
        }

        if($request->endereco =='semfrete'){
            session('carrinho')->frete= 0.00;
            session('carrinho')->status= "pedido recebido";
            
        }else if(is_null($request->endereco)){
            return redirect()->back()->with('mensagem_falha',"escolha um método de entrega");
        }else{
            return('entrega');
        }
        $carrinho= Compras::findOrFail(session('carrinho')->id);
        $carrinho->status=session('carrinho')->status;
        $carrinho->descricao=session('carrinho')->descricao;
        $carrinho->fk_user_atendente_id=session('carrinho')->fk_user_atendente_id;
        $carrinho->fk_cartao_id=session('carrinho')->fk_cartao_id;
        $carrinho->fk_endereco_id=session('carrinho')->fk_endereco_id;
        $carrinho->tipo_pagamento=session('carrinho')->tipo_pagamento;
        $carrinho->troco=session('carrinho')->troco;
        $carrinho->valortotal=session('carrinho')->valortotal;
        $carrinho->hora_compra=Carbon::now()->toDateTimeString();
        $carrinho->save();
        $novocarrinho = new Compras();
        $novocarrinho->status= 'carrinho';
        $novocarrinho->fk_user_cliente_id= session('user')->id;
        $novocarrinho->save();
        Session()->put('carrinho',$novocarrinho);

        return redirect()->route('index')->with("mensagem_sucesso","pedido feito com sucesso!");
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

    
}
