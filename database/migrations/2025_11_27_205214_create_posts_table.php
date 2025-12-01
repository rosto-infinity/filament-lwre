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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            // ✅ BONNE PRATIQUE : Utilise foreignId()
           $table->foreignId('category_id')
           ->constrained()      // -Lie automatiquement à 'categories' table, 'id' column
           ->cascadeOnDelete(); // Utilisation du raccourci moderne
            $table->string('color');
            $table->string('image');
            $table->longText('body');
            $table->json('tags');
            $table->boolean('published')->default(false);
            $table->date('published_at')->nullable(); // Ajout de nullable() car la date peut être vide tant que le post n'est pas publié
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
