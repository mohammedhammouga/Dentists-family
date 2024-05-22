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
            $table->string('name');
            $table->string('prenom');
            $table->string('telephone')->unique();
            $table->string('region')->nullable(); // Définir la colonne 'region' comme une chaîne de caractères nullable
            $table->string('ville');// Définir la colonne 'region' comme une chaîne de caractères nullable
            $table->string('adresse'); // Définir la colonne 'region' comme une chaîne de caractères nullable
            $table->string('email')->unique();
            $table->string('profile_photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
