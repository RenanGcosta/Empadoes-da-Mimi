<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'telefone', 'cep', 'logradouro', 'bairro', 'cidade', 'id_user'
    ];

    public function id_usuario()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}