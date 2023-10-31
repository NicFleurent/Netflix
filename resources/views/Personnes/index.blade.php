@extends('layouts.app')

@section('title', 'Netflix')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/acteurs.css') }}">
@endsection

@section('contenu')
    <main>

        <!-- Acteurs/Actrices-->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Acteurs/Actrices</h2>
                    </div>

                </div>
                <ul class="movies-list  has-scrollbar">

                    @if (count($acteurs))
                        @foreach ($acteurs as $acteur)
                            <a href="{{ route('personnes.show', [$acteur]) }}">
                                <li>
                                    <div class="movie-card">
                                        <img class="img" src="{{ $acteur->lien_photo }}"
                                            alt="Image de {{ $acteur->nom }} ">
                                        <div class="title-wrapper">
                                            <h3 class="card-title">{{ $acteur->nom }}</h3>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                    @endif
                    <p> Pas d'acteurs </p>
                </ul>
            </div>
        </section>

        <!-- Réalisateurs/Réalisatrices -->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Réalisateurs/Réalisatrices</h2>
                    </div>
                </div>
                <ul class="movies-list  has-scrollbar">
                    @if (count($realisateurs))
                        @foreach ($realisateurs as $realisateur)
                            <a href="{{ route('personnes.show', [$realisateur]) }}">
                                <li>
                                    <div class="movie-card">
                                        <img class="img" src="{{ $realisateur->lien_photo }}"
                                            alt="Image de {{ $realisateur->nom }} ">
                                        <div class="title-wrapper">
                                            <h3 class="card-title">{{ $realisateur->nom }}</h3>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                    @endif
                    <p> Pas de réalisateurs </p>
                </ul>
            </div>
        </section>

        <!-- Producteurs/Productrices -->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Producteurs/Productrices</h2>
                    </div>
                </div>
                <ul class="movies-list  has-scrollbar">
                    @if (count($producteurs))
                        @foreach ($producteurs as $producteur)
                            <a href="{{ route('personnes.show', [$producteur]) }}">
                                <li>
                                    <div class="movie-card">
                                        <img class="img" src="{{ $producteur->lien_photo }}"
                                            alt="Image de {{ $producteur->nom }} ">
                                        <div class="title-wrapper">
                                            <h3 class="card-title">{{ $producteur->nom }}</h3>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                    @endif
                    <p> Pas de réalisateurs </p>
                </ul>
            </div>
        </section>

        <!-- Fêtes du mois -->
        <section class="upcoming">
            <div class="container">
                <div class="flex-wrapper">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Ils vieillissent ce mois-ci!</h2>
                    </div>
                </div>
                <ul class="movies-list  has-scrollbar">
                    @if (count($dateAnniversaires))
                        @foreach ($dateAnniversaires as $dateAnniversaire)
                            <a href="{{ route('personnes.show', [$dateAnniversaire]) }}">
                                <li>
                                    <div class="movie-card">
                                        <img class="img" src="{{ $dateAnniversaire->lien_photo }}"
                                            alt="Image de {{ $dateAnniversaire->nom }} ">
                                        <div class="title-wrapper">
                                            <h3 class="card-title">{{ $dateAnniversaire->nom }}</h3>
                                        </div>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                    @endif
                    <p> Aucun vieillissent ce mois-ci. </p>
                </ul>
            </div>
        </section>

    </main>
@endsection
