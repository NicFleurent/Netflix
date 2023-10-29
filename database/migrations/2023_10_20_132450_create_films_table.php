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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 100);
            $table->text('resume');
            $table->integer('duree');
            $table->integer('annee_sortie');
            $table->text('lien_film');
            $table->text('lien_pochette');
            $table->string('type', 50);
            $table->string('genre', 50);
            $table->string('brand', 50);
            $table->double('cote');
            $table->string('rating', 20);
            $table->foreignId('realisateur_id')->constrained('personnes');
            $table->foreignId('producteur_id')->constrained('personnes');
            $table->foreignId('acteurPrincipal_id')->constrained('personnes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flims');
    }
};
