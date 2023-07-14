<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;

class CompraController extends Controller
{
    const STATUS = [
        'carrinho',
        'compra efetuada',
        'compra cancelada',
        'destinatario ausente',
        'compra finalizada'
    ];

    public function AlterarStatus (Request $request)
    {
        $data = $request->all();
        if (!in_array($data['novo_status'], self::STATUS)) {
            return  redirect()->back()->with('mensagem_falha', 'Selecione um status válido');
        }
        $compra = Compras::find($data['id_compra']);
        if (!$compra) {
            return  redirect()->back()->with('mensagem_falha', 'Compra não encontrada');
        }
        $compra->status = $data['novo_status'];
        $compra->save();
        return redirect()->route('atendente_index');
    }
}
