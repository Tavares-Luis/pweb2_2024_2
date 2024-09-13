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
        Schema::create(table: 'aluno', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column:'nome',length: 130);
            $table->string(column:'cpf',length: 14);
            $table->string(column:'telefone',length: 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'aluno');
    }
};
