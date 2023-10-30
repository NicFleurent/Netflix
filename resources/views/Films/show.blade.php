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
                        <p>{{$film->resume}}</p>
                        <p>{{$film->duree}}</p>
                        <p>{{$film->annee_sortie}}</p>
                        <p>{{$film->genre}}</p>
                        <p>{{$film->type}}</p>
                        <p>{{$film->brand}}</p>
                        <p>{{$film->cote}}</p>
                        <p>{{$film->rating}}</p>
                        <p>{{$film->realisateur->nom}}</p>
                        <p>{{$film->producteur->nom}}</p>
                        <p>{{$film->acteurPrincipal}}</p>
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