<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\produto;
use App\Models\produto_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class carrinhocontroller extends Controller
{

    public function index(Request $request) {
        $produtos = produto::select('produto.*','produto_compra.quantidade as quantidade_carrinho')
            ->join('produto_compra', 'produto_compra.fk_produto_id', '=', 'produto.id')
            ->join('compra', 'produto_compra.fk_compra_id', '=', 'compra.id')
            ->where('compra.status', '=', 'carrinho')
            ->where('compra.fk_user_cliente_id', '=', Auth()->user()->id)
            ->get();

        return view('cliente\carrinho',['produtos'=> $produtos]);
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
