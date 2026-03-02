<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    // Nome da tabela (opcional se o plural for padrão, mas bom para evitar erros)
    protected $table = 'fornecedores';

    // Campos que permitimos salvar via formulário
    protected $fillable = [
        'razao_social', 
        'cnpj', 
        'contato_nome', 
        'telefone'
    ];
}