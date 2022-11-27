<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empada extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'valor', 'id_tamanho', 'foto'
    ];

    public function tamanho()
    {
        return $this->belongsTo(Tamanho::class, 'id_tamanho');
    }
}