@extends('layouts.app')

@section('title', 'Netflix - ' . $film->titre)

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pop_over.css') }}">
@endsection

@section('contenu')
    @if(isset($film))
        <section class="zoomFilm">
            <div class="container">
                @role('admin')
                <div class="lien-edit">
                    <a href="{{route('films.edit', [$film])}}">
                        <ion-icon name="construct-outline"></ion-icon>
                        <data>Mettre à jour</data>
                    </a>
                    
                    <a href="#0" class="cd-popup-trigger">
                        <ion-icon name="remove-circle-outline"></ion-icon>
                        <data>Supprimer</data>
                    </a>

                    <a href="{{route('films.createActeurFilmShowFilm', [$film])}}">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                        <data>Ajouter un acteur</data>
                    </a>
                </div>
                @endrole
                
                <h1 class="h1 section-title">{{$film->titre}}</h1>
                <div class="presentation">
                    <div class="image">
                        <img src="{{asset($film->lien_pochette)}}" alt="{{$film->titre}} movie poster">
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
                            <div class="text-info popover__wrapper">Réalisateur : 
                                <span>{{$film->realisateur->nom}}</span>
                                <a class="popover__content" href="{{ route('personnes.show', [$film->realisateur]) }}">
                                    <b class="popover__message">Plus d'information</b>
                                    <img alt="photo {{$film->realisateur->nom}}" src="{{$film->realisateur->lien_photo}}">
                                </a>
                            </div>
                        </div>
                        <div class="bloc-info">
                            <div class="text-info popover__wrapper">Producteur : 
                                <span>{{$film->producteur->nom}}</span>
                                <a class="popover__content" href="{{ route('personnes.show', [$film->producteur]) }}">
                                    <b class="popover__message">Plus d'information</b>
                                    <img alt="photo {{$film->producteur->nom}}" src="{{$film->producteur->lien_photo}}">
                                </a>
                            </div>

                            <div class="text-info popover__wrapper">Acteur Principal : 
                                <span>{{$film->acteurprincipal->nom}}</span>
                                <a class="popover__content" href="{{ route('personnes.show', [$film->acteurprincipal]) }}">
                                    <b class="popover__message">Plus d'information</b>
                                    <img alt="photo {{$film->acteurprincipal->nom}}" src="{{$film->acteurprincipal->lien_photo}}">
                                </a>
                            </div>
                        </div>
                        <div class="bloc-acteur">
                            <p>Acteurs :</p>
                            @foreach($film->acteurs as $acteurDuFilm)
                                <div class="acteur popover__wrapper">
                                    {{$acteurDuFilm->nom}}
                                    @role('admin')
                                    <a id="{{$acteurDuFilm->id}}" href="#" class="cd-popup-trigger-acteur">
                                        <ion-icon name="remove-circle-outline"></ion-icon>
                                    </a>
                                    @endrole
                                    <a class="popover__content" href="{{ route('personnes.show', [$acteurDuFilm]) }}">
                                        <b class="popover__message">Plus d'information</b>
                                        <img alt="photo {{$acteurDuFilm->nom}}" src="{{$acteurDuFilm->lien_photo}}">
                                    </a>
                                </div>

                                @role('admin')
                                <!-- Modal Suppresion Acteur -->
                                <div id="{{$acteurDuFilm->id}}" class="cd-popup-acteur" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Voulez-vous vraiment supprimer cet acteur?</p>
                                        <ul class="cd-buttons">
                                            <li>
                                                <form action="{{route('films.destroyActeurFilm', [$film,$acteurDuFilm])}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <data>OUI</data>
                                                    </button>    
                                                </form>
                                            </li>
                                            <li><a href="#" class="cd-popup-non">NON</a></li>
                                        </ul>
                                        <a href="#" class="cd-popup-close img-replace"></a>
                                    </div> <!-- cd-popup-container -->
                                </div> <!-- cd-popup -->
                                @endrole
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        @role('admin')
        <!-- Modal Suppresion Film -->
        <div class="cd-popup" role="alert">
            <div class="cd-popup-container">
                <p>Voulez-vous vraiment supprimer ce film?</p>
                <ul class="cd-buttons">
                    <li>
                        <form action="{{route('films.destroy', [$film->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <data>OUI</data>
                            </button>    
                        </form>
                    </li>
                    <li><a href="#" class="cd-popup-non">NON</a></li>
                </ul>
                <a href="#" class="cd-popup-close img-replace"></a>
            </div> <!-- cd-popup-container -->
        </div> <!-- cd-popup -->
        @endrole
    @endif
@endsection