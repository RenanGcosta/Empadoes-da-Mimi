<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoEmpada extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pedido', 'id_empada', 'quantidade'
    ];
}
