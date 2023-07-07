<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto_compra extends Model
{
    use HasFactory;
    protected $table = 'compra';

    protected $fillable = [
        'fk_produto_id',
        'fk_compra_id',
        'quantidade',
        
        
    ];
}
