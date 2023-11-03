<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'titre',
        'resume',
        'duree',
        'annee_sortie',
        'lien_film',
        'lien_pochette',
        'realisateur_id',
        'producteur_id',
        'acteurprincipal_id',
        'type',
        'genre',
        'brand',
        'cote',
        'rating'
    ];

    public function realisateur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Personne::class);
    }

    public function acteurprincipal()
    {
        return $this->belongsTo(Personne::class);
    }

    public function acteurs()
    {
        return $this->belongsToMany(Personne::class);
    }

}
