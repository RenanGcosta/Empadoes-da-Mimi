<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoEmpada extends Model
{
    use HasFactory;

    protected $table = 'pedidos_x_empadas';

    protected $fillable = [
        'id_pedido', 'id_empada', 'quantidade'
    ];

    public function idEmpada()
    {
        return $this->belongsTo(Empada::class, 'id_empada');
    }

    public function idPedido()
    {
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

}