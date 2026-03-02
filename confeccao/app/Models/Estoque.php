<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    // Isso avisa ao Laravel para NÃO procurar por "estoques"
    protected $table = 'estoque';

    protected $fillable = [
    'descricao', 
    'quantidade', 
    'unidade', 
    'valor_unitario', 
    'fornecedor_id' // Certifique-se que este cara está aqui
];
}