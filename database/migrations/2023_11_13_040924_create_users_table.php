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
            $table->unsignedBigInteger('id_profile') -> nullable();
            $table->string('email', 150);
            $table->string('password', 255);
            $table->string('avatar') -> default('profile_photo.jpg') -> nullable() ;
            $table->timestamps();
            
            
            $table -> foreign('id_profile') -> references('id') -> on('profiles');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('user');
        // Schema::enableForeignKeyConstraints();
    }
};
