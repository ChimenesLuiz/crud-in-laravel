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
            $table->string('name', 120);
            $table->string('last_name', 200)  -> nullable();
            $table->enum('sexo', ['masculino', 'feminino', 'apache'])  -> nullable();
            $table->unsignedBigInteger('id_profile') -> default(1);
            $table->string('email', 150);
            $table->string('password', 255);
            $table->string('cep', 8) -> nullable();
            $table->string('endereco', 150)  -> nullable();
            $table->string('cidade', 80)  -> nullable();
            $table->string('estado', 80)  -> nullable();
            $table->timestamps();
            
            
            $table -> foreign('id_profile') -> references('id') -> on('profiles') -> onDelete('cascade');
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
