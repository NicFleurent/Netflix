@extends('layouts.app')

@section('title', 'Netflix - $film')

@section('contenu')
    @if(isset($film))
        <section class="zoomFilm">
            <div class="container">

                <div class="lien-edit">
                    <a href="{{route('films.edit', [$film])}}">
                        <ion-icon name="construct-outline"></ion-icon>
                        <data>Mettre à jour</data>
                    </a>
                    
                    <a href="{{route('films.destroy', [$film->id])}}">
                        <ion-icon name="remove-circle-outline"></ion-icon>
                        <data>Supprimer</data>
                    </a>

                    <a href="{{route('films.createActeurFilmShowFilm', [$film])}}">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                        <data>Ajouter un acteur</data>
                    </a>
                </div>
                
                <h1 class="h1 section-title">{{$film->titre}}</h1>
                <div class="presentation">
                    <div class="image">
                        <img src="{{$film->lien_pochette}}" alt="{{$film->titre}} movie poster">
                    </div>
                    <div class="information">
                        <div class="trailer">
                            <iframe width="560" height="315" src="{{$film->lien_film}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>

                        <div class="bloc-resume">
                            <div class="text-info">{{$film->resume}}</div>
                        </div>
                        <div class="bloc-info">
                            <div id="duree" class="text-info">Durée : <span>{{$film->duree}}</span></div>
                            <div class="text-info">Année de sortie : <span>{{$film->annee_sortie}}</span></div>
                        </div>
                        <div class="bloc-info">
                            <div class="text-info">Cote : <span>{{$film->cote}}</span></div>
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
                            <div class="text-info">Acteur Principal : <span>{{$film->acteurprincipal->nom}}</span></div>
                        </div>
                        <div class="bloc-acteur">
                            <p>Acteurs :</p>
                            @foreach($film->acteurs as $acteurDuFilm)
                                <p>{{$acteurDuFilm->nom}}</p>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection