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
            $table->date('date_sortie');
            $table->text('lien_film');
            $table->text('lien_pochette');
            $table->unsignedBigInteger('realisateur');
            $table->foreign('realisateur')->references('id')->on('personnes');
            $table->unsignedBigInteger('producteur');
            $table->foreign('producteur')->references('id')->on('personnes');
            $table->unsignedBigInteger('acteur_principal');
            $table->foreign('acteur_principal')->references('id')->on('personnes');
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
