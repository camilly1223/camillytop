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
        Schema:: create(table: 'user_alunos', callback: function (Blueprint $table) {
        $table->id();
        $table->String(column: 'nome');
        $table->String(column: 'email')->unique();
        $table->String(column: 'telefone')->unique();
        $table->String(column: 'motivoContato');
        $table->String(column: 'mensagem');
        //
        }
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
