<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// REMOVIDO: use App\Http\Controllers\ClienteController; (Não importe a própria classe)

class ClienteController extends Controller
{
    public function index() 
    {
        // Busca todos os clientes no banco de dados
        $users = \App\Models\User::all(); 
        
        // Retorna a view clientes.index passando os clientes encontrados
        return view('clientes.index', compact('users')); 
    }
}