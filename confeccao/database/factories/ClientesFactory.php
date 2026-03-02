<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;

    protected $table = 'estoque'; // Força o nome correto da tabela

    protected $fillable = [
        'descricao', 
        'quantidade', 
        'unidade', 
        'valor_unitario', 
        'fornecedor_id'
    ];
}