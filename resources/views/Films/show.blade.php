@extends('layouts.app')

@section('title', 'Netflix - $film')

@section('contenu')
    @if(isset($film))
        <section class="zoomFilm">
            <div class="container">
                <h2 class="h2 section-title">{{$film->titre}}</h2>
                @foreach($film->acteurs as $acteurDuFilm)
                    <h4>{{$acteurDuFilm->nom}}</h4>
                @endforeach
            </div>
        </section>
    @endif
@endsection