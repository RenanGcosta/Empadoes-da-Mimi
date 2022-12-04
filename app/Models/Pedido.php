<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'entrega', 'valor_total', 'status', 'descricao', 'id_user', 'id_cliente', 'id_pagamento',
        'id_empada'
    ];

    public function idUsuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function idCliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    public function idPagamento()
    {
        return $this->belongsTo(Pagamento::class, 'id_pagamento');
    }

    public function idEmpada()
    {
        return $this->belongsTo(Empada::class, 'id_empada');
    }
}
