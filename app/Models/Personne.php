<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    public function filmsJouesAP()
    {
        return $this->hasMany(Film::class, 'acteurprincipal_id');
    }

    public function filmsJoues()
    {
       return $this->belongsToMany(Film::class, 'film_personne','personne_id','film_id');
    }

    public function filmsRealises()
    {
        return $this->hasMany(Film::class, 'realisateur_id');
    }

    public function filmsProduits()
    {
        return $this->hasMany(Film::class, 'producteur_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Film::class);
    }

    protected $fillable = ['nom', 'date_naissance', 'lien_photo', 'role'];
}
