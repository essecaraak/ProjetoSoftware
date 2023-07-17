<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;
use Carbon\Carbon;

class CompraController extends Controller
{
    
    
    public function AlterarStatus (Request $request,$id)
    {
       
        $compra = Compras::findOrFail($id);
        $novostatus =$request->input('status2');
        
        if($novostatus=='Pedido aguardando busca pelo cliente'){

        }else if($novostatus=='Pedido saiu para a entrega'){

        }else if($novostatus=='Pedido Entregue'){
            if(!is_null($request->descricao3)){
                $compra->descricao= $request->descricao3;
                
            }
            $compra->hora_finalizacao =Carbon::now()->toDateTimeString();
        }else if($novostatus=='Pedido Cancelado'){
            if(!is_null($request->descricao4)){
                $compra->descricao= $request->descricao4;
            }
            $compra->hora_finalizacao =Carbon::now()->toDateTimeString();
        }else{
            return redirect()->back()->with("mensagem_falha",'não altere os componentes');
        }
        $compra->status=$novostatus;
        $compra->save();
        return redirect()->back()->with('mensagem_sucesso', 'alteração feita com sucesso');
       
        
    
    }
}
