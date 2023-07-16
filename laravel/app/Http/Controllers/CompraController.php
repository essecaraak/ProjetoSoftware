<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;

class CompraController extends Controller
{
    

    public function AlterarStatus (Request $request,$id)
    {
       
        $compra = Compras::findOrFail($id);
        $novostatus =$request->status2;
       /* if (!$compra) {
            return  redirect()->back()->with('mensagem_falha', 'Compra não encontrada');
        }
        $compra->status = $data['novo_status'];
        $compra->save();*/
        return redirect()->route('atendente_index');
    }
}
