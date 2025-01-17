<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\Compras;
use App\Models\Endereco;
use App\Models\produto;
use App\Models\produto_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

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
        $produtos = DB::Table('produto')
        ->select('*')
        ->orderBy('nome')->get();
        return view('/index',['produtos'=> $produtos,"tipobusca" =>1]);
    }
 

    public function pesquisa_produto(Request $request){

        
        if(!isNull($request->textobusca)){
            if($request->tipobusca =='Ordenar pelo menor preço'){
                $produtos = DB::Table('produto')
                    ->select('*')
                    ->orderBy('valor')->get();
                return view('/index',['produtos'=> $produtos,"tipobusca" =>2]);
            }else if($request->tipobusca =='Ordenar pelo maior preço'){
                $produtos = DB::Table('produto')
                    ->select('*')
                    ->orderBy('valor')->get()->reverse()->values();
                return view('/index',['produtos'=> $produtos,"tipobusca" =>3]);
            }else{
                return redirect()->route('index');
            }
        }else{
            if($request->tipobusca =='Ordenar pelo menor preço'){
                $produtos = DB::Table('produto')
                    ->select('*')
                    ->where('nome','LIKE','%'.$request->textobusca.'%')
                    ->orderBy('valor')->get();
                return view('/index',['produtos'=> $produtos,"tipobusca" =>2]);
            }else if($request->tipobusca =='Ordenar pelo maior preço'){
                $produtos = DB::Table('produto')
                    ->select('*')
                    ->where('nome','LIKE','%'.$request->textobusca.'%')
                    ->orderBy('valor')->get()->reverse()->values();
                return view('/index',['produtos'=> $produtos,"tipobusca" =>3]);
            }else{
                $produtos = DB::Table('produto')
                    ->select('*')
                    ->where('nome','LIKE','%'.$request->textobusca.'%')
                    ->orderBy('nome')->get();
                return view('/index',['produtos'=> $produtos,"tipobusca" =>1]);
            }
        }
        
        
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
        $compras = Compras::where('fk_user_cliente_id' , '=', session('user')->id)
            ->where('status','!=','carrinho')
            ->orderBy('hora_compra')
            ->get()->reverse()->values();
            
        $produtos =produto_compra::select('produto_compra.*')
            ->join('compra','produto_compra.fk_compra_id','=','compra.id')->get();
            
        $enderecos =Endereco::select('endereco.*')
            ->join('compra','compra.fk_endereco_id','=','endereco.id')->get();
            
        $cartoes =cartao::select('cartao.*')
            ->join('compra','compra.fk_cartao_id','=','cartao.id')->get();
        return view('/cliente/pedidos',['compras'=>$compras,'produtos'=>$produtos,'enderecos'=>$enderecos,'cartoes'=>$cartoes] );
    }
    public function tela_endereco(){
        return view('/cliente/endereco');
    }
    public function tela_novo_endereco(){
        return view('/cliente/novo_endereco');
    }
    public function tela_cartao(){
        $data = DB::table('cartao')
            ->where("fk_user_id",'=',session('user')->id)->get();
        return view('/cliente/cartao',['cartoes'=>$data]);


    }
    public function tela_novo_cartao(){
        return view('/cliente/novo_cartao');
    }
    public function tela_fechamento_pedido(){
        return view('/cliente/fechamento_pedido');
    }


    //telas do atendente

    public function tela_atendente(){
        $compras = Compras::select('compra.*','users.nome')
            ->join('users', 'users.id', '=', 'compra.fk_user_cliente_id')
            ->where('compra.status','!=','carrinho')
            ->where('compra.status','!=','Pedido Entregue')
            ->where('compra.status','!=','Pedido Cancelado')
            ->orderBy('hora_compra')
            ->get()->reverse()->values();
            
        $produtos =produto_compra::select('produto_compra.*')
            ->join('compra','produto_compra.fk_compra_id','=','compra.id')->get();
            
        $enderecos =Endereco::select('endereco.*')
            ->join('compra','compra.fk_endereco_id','=','endereco.id')->get();
            
        $cartoes =cartao::select('cartao.*')
            ->join('compra','compra.fk_cartao_id','=','cartao.id')->get();
       
        return view('/atendente/index',['compras'=>$compras,'produtos'=>$produtos,'enderecos'=>$enderecos,'cartoes'=>$cartoes]);
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
