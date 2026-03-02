<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Lista todos os fornecedores (Página Inicial do Módulo)
     */
    public function index()
    {
        $fornecedores = Fornecedor::all(); // Busca todos no banco
        return view('fornecedores.index', compact('fornecedores'));
    }

    /**
     * Mostra o formulário para criar um novo fornecedor
     */
    public function create()
    {
        return view('fornecedores.create');
    }

    /**
     * Recebe os dados do formulário e salva no banco
     */
    public function store(Request $request)
    {
        // Validação básica para não salvar dados vazios ou CNPJ duplicado
        $request->validate([
            'razao_social' => 'required',
            'cnpj'         => 'required|unique:fornecedores',
            'telefone'     => 'required',
        ]);

        Fornecedor::create($request->all()); // Salva tudo que veio do form

        return redirect()->route('fornecedores.index')
                         ->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    /**
     * Mostra os detalhes de um fornecedor específico (opcional)
     */
    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show', compact('fornecedor'));
    }

    /**
     * Mostra o formulário de edição com os dados atuais
     */
    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.edit', compact('fornecedor'));
    }

    /**
     * Atualiza os dados no banco de um fornecedor já existente
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        $request->validate([
            'razao_social' => 'required',
            'cnpj'         => 'required|unique:fornecedores,cnpj,' . $fornecedor->id,
            'telefone'     => 'required',
        ]);

        $fornecedor->update($request->all());

        return redirect()->route('fornecedores.index')
                         ->with('success', 'Fornecedor atualizado!');
    }

    /**
     * Exclui o fornecedor do banco
     */
    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();

        return redirect()->route('fornecedores.index')
                         ->with('success', 'Fornecedor removido!');
    }
}