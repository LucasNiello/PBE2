<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clientes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void 
    {
        // 1. Cria 10 usuários aleatórios (opcional)
        User::factory(10)->create();

        // 2. Cria o seu usuário de acesso ao sistema
        // Se este usuário já existir, mude o e-mail ou limpe o banco antes
        User::factory()->create([
            'name' => 'Lucas Confeccao',
            'email' => 'lucas@confeccao.com.br',
            'password' => bcrypt('password'), 
        ]);

        // 3. Chama os outros seeders na ordem lógica:
        // Primeiro Fornecedor, depois Estoque (que depende do fornecedor)
        $this->call([
            FornecedorSeeder::class,
            EstoqueSeeder::class,
        ]);

        /* Caso queira criar clientes fictícios no futuro via Factory:
        Clientes::factory(10)->create(); 
        */
    }
}