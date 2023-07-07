<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $table = 'compra';

    protected $fillable = [
        'status',
        'descricao',
        'fk_user_cliente_id',
        'fk_user_atendente_id',
        'fk_cartao_id',
        'fk_endereco_id ',
        
    ];
}
