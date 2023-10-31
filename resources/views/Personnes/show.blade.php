@extends('layouts.app')
@section('contenu')
    @if (isset($personne))
        <section>
            <h1>{{ $personne->nom }}</h1>
            <div class="container">

                <div class="movie-card">
                    <img class="img" src="{{ $personne->lien_photo }}" alt="Image de {{ $personne->nom }} ">
                    <div class="title-wrapper">
                    </div>
                </div>
                <p>{{ $personne->date_naissance }}</p>
                <p> {{ $personne->role }}</p>
            </div>
        </section>
    @endif
@endsection
