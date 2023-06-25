<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    protected $table = 'compra';

    public function comprador()
    {
        return $this->hasOne(User::class, 'id', 'fk_user_cliente_id');
    }

    public function atendente()
    {
        return $this->hasOne(User::class, 'id', 'fk_user_atendente_id');
    }

    public function cartao()
    {
        return $this->hasOne(Cartao::class, 'id', 'fk_cartao_id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id', 'fk_endereco_id');
    }
}
