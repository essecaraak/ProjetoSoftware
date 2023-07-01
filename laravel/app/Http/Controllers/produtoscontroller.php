<?php

namespace App\Http\Controllers;

use App\Http\Requests\produtorequest;
use App\Models\produto;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class produtoscontroller extends Controller
{
    public function produtos_create(produtorequest $request){
        
        $produto =new  produto();
        $produto->nome = $request->nome;
        $produto->tipo = $request->tipo;
        if(!is_null($request->descricao)){
            $produto->descricao = $request->descricao;
        }
        
        $produto->quantidade = $request->quantidade;
        $produto->valor = $request->valor;
        $filename =$request->file('imagem')->getClientOriginalName();
        
       if($request->hasFile('imagem')){
            if($request->file('imagem')->isValid()){
                $path =$request->file('imagem')->storeAs('produtos',$filename,'public');
                
                $produto->imagem = '/storage/'.$path;
            }
       }
       $produto->save();
       
    }
}
