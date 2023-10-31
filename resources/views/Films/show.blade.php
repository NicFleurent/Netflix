@extends('layouts.app')

@section('title', 'Netflix - $film')

@section('contenu')
    @if(isset($film))
        <section class="zoomFilm">
            <div class="container">
                <h2 class="h2 section-title">{{$film->titre}}</h2>
                <div class="presentation">
                    <div class="image">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                    </div>
                    <div class="information">
                        <div class="bloc-resume">
                            <div class="text-info">Decription :</div>
                            <div class="text-info">{{$film->resume}}</div>
                        </div>
                        <div class="bloc-info">
                            <div id="duree" class="text-info">Durée : <span>{{$film->duree}}</span></div>
                            <div class="text-info">Année de sortie : <span>{{$film->annee_sortie}}</span></div>
                        </div>
                        <div class="bloc-info">
                            <div class="text-info">Côte : <span>{{$film->cote}}</span></div>
                            <div class="text-info">Classement PG : <span>{{$film->rating}}</span></div>
                        </div>
                        <div class="bloc-info">
                            <div class="text-info">Genre : <span>{{$film->genre}}</span></div>
                            <div class="text-info type-contenu">Type de contenu : <span>{{$film->type}}</span></div>
                            
                        </div>
                        <div class="bloc-info">
                            <div class="text-info">Marque : <span>{{$film->brand}}</span></div>
                            <div class="text-info">Réalisateur : <span>{{$film->realisateur->nom}}</span></div>
                        </div>
                        <div class="bloc-info">
                            <div class="text-info">Producteur : <span>{{$film->producteur->nom}}</span></div>
                            <div class="text-info">Acteur Principal : <span>{{$film->acteurPrincipal}}</span></div>
                        </div>
                        <div class="bloc-acteur">
                            <p>Acteurs :</p>
                            @foreach($film->acteurs as $acteurDuFilm)
                                <p>{{$acteurDuFilm->nom}}</p>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
                <h1>Ajouter Trailer</h1>
            </div>
        </section>
    @endif
@endsection