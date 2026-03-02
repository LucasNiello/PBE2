<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estoque;
use App\Models\Fornecedor;

class EstoqueSeeder extends Seeder
{
    public function run(): void
    {
        // Pega o primeiro fornecedor criado pelo FornecedorSeeder
        $fornecedor = Fornecedor::first();

        if ($fornecedor) {
            Estoque::create([
                'descricao' => 'Tecido Algodão Cru',
                'quantidade' => 50.5,
                'unidade' => 'm',
                'valor_unitario' => 15.00,
                'fornecedor_id' => $fornecedor->id
            ]);
        }
    }
}