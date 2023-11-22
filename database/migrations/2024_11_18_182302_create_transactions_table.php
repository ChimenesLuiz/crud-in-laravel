<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\DatabaseSeeder;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user') -> nullable();
            $table->unsignedBigInteger('id_client') -> nullable();
            $table->unsignedBigInteger('id_product') -> nullable();
            $table->integer('amount');
            $table->float('total', 8);
            $table->timestamps();

            $table -> foreign('id_user') -> references('id') -> on('users');
            $table -> foreign('id_client') -> references('id') -> on('clients');
            $table -> foreign('id_product') -> references('id') -> on('products');

            // DatabaseSeeder::run();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
