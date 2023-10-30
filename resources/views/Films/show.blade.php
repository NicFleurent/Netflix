@extends('layouts.app')

@section('title', 'Netflix - $film')

@section('contenu')
    @if(isset($film))
        <section class="zoomFilm">
            <div class="container">
                <h2 class="h2 section-title">{{$film->titre}}</h2>
                <div class="presentation">
                    <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                    <div class="information">
                        <p>Decription :</p>
                        <p class="space">{{$film->resume}}</p>
                        <p>Durée : {{$film->duree}}</p>
                        <p class="space">Année de sortie : {{$film->annee_sortie}}</p>
                        <p>Genre : {{$film->genre}}</p>
                        <p class="space">Type de contenu : {{$film->type}}</p>
                        <p>Marque : {{$film->brand}}</p>
                        <p>Côte : {{$film->cote}}</p>
                        <p class="space">Classement PG : {{$film->rating}}</p>
                        <p>Réalisateur : {{$film->realisateur->nom}}</p>
                        <p>Producteur : {{$film->producteur->nom}}</p>
                        <p class="space">Acteur Principal : {{$film->acteurPrincipal}}</p>
                        <p>Acteurs :</p>
                        @foreach($film->acteurs as $acteurDuFilm)
                            <p>{{$acteurDuFilm->nom}}</p>
                        @endforeach
                    </div>
                </div>
                <h1>Ajouter Trailer</h1>
            </div>
        </section>
    @endif
@endsection