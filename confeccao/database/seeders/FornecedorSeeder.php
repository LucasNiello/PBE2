<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        Fornecedor::create([
            'razao_social' => 'Tecidos Brasil SA',
            'cnpj' => '12345678000100',
            'telefone' => '11999999999'
        ]);

        Fornecedor::create([
            'razao_social' => 'Botões & Cia',
            'cnpj' => '98765432000199',
            'telefone' => '11888888888'
        ]);
    }
}