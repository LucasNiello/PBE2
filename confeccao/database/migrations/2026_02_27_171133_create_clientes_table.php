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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do cliente
            $table->string('cpf')->unique();// CPF do cliente, deve ser único
            $table->string('telefone');// Telefone do cliente
            $table->string('reserva');// N# em estoque
            $table->timestamps(); // Criado e atualizado em
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
