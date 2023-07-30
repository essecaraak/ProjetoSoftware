<?php

namespace App\Http\Controllers;

use App\Models\noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class noticiacontroller extends Controller
{
    public function noticia_create(Request $request){
        
        $noticia =new  noticia();
       if($request->hasFile('imagem')){
        $noticia->titulo = $request->titulo;
        if(!is_null($request->descricao)){
            $noticia->descricao = $request->descricao;
        }
        $filename =$request->file('imagem')->getClientOriginalName();
            if($request->file('imagem')->isValid()){
                $path =$request->file('imagem')->storeAs('public/img/produtos',$filename);
                $noticia->foto = $filename;
                $noticia->save();
                return redirect()->route('gerenciar-feed')->with("mensagem_sucesso","noticia cadastrada com sucesso");
            }
       }
       
       
       return redirect()->route('gerenciar-feed')->with("mensagem_falha","Erro com a imagem");
    }
    public function noticia_delete(Request $request, $id){
        
        $noticia = noticia::findOrFail($id);
        if(File::exists($noticia->imagem)){
            File::delete($noticia->imagem);
        }
        $noticia->deletado='s';
        $noticia->save();
       return redirect()->back()->with("mensagem_sucesso","noticia deletado com sucesso");
    }
}
