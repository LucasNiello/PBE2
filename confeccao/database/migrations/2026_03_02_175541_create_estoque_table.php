<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->decimal('quantidade', 10, 2);
            $table->string('unidade');
            $table->decimal('valor_unitario', 10, 2);
            
            // Relacionamento com a tabela de fornecedores
            $table->foreignId('fornecedor_id')->constrained('fornecedores');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};