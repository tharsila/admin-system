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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->char('tipo', 10);
            
            $table->string('nome');
            $table->string('razao_social')->nullable();
            $table->char('documento', 14); //cpf ou cnpj
            $table->char('ie_rg', 25); //ie é inscrição estadual

            $table->string('nome_contato', 100);
            $table->string('celular', 11);
            $table->string('email', 100);
            $table->char('telefone', 10)->nullable();

            $table->char('cep', 8);
            $table->string('logradouro', 100);
            $table->string('bairro', 50);
            $table->string('cidade', 50);
            $table->char('estado', 2);

            $table->text('observacao')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
