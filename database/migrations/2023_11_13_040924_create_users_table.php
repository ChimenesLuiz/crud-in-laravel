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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 120);
            $table->string('sobrenome', 200);
            $table->string('usuario', 50);
            $table->string('senha', 30);
            $table->string('email', 150);
            $table->string('cep', 8);
            $table->string('endereco', 150);
            $table->string('cidade', 80);
            $table->string('estado', 80);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
