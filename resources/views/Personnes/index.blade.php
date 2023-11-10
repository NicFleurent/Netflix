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
                <li>
                    <div class="movie-card">
                        <a href="{{ route('personnes.show', [$acteur]) }}">
                            <figure class="card-banner">
                                <img class="img" src="{{ $acteur->lien_photo }}" alt="Image de {{ $acteur->nom }} ">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="{{ route('personnes.show', [$acteur]) }}">
                                <h3 class="card-title">{{ $acteur->nom }}</h3>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
                @else
                <p> Pas d'acteurs </p>
                @endif

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
                <li>
                    <div class="movie-card">
                        <a href="{{ route('personnes.show', [$realisateur]) }}">
                            <figure class="card-banner">
                                <img class="img" src="{{ $realisateur->lien_photo }}" alt="Image de {{ $realisateur->nom }} ">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="{{ route('personnes.show', [$realisateur]) }}">
                                <h3 class="card-title">{{ $realisateur->nom }}</h3>
                            </a>
                        </div>
                    </div>
                </li>

                @endforeach
                @else
                <p> Pas de réalisateurs </p>
                @endif

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
                <li>
                    <div class="movie-card">
                        <a href="{{ route('personnes.show', [$producteur]) }}">
                            <figure class="card-banner">
                                <img class="img" src="{{ $producteur->lien_photo }}" alt="Image de {{ $producteur->nom }} ">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="{{ route('personnes.show', [$producteur]) }}">
                                <h3 class="card-title">{{ $producteur->nom }}</h3>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
                @else
                <p> Pas de réalisateurs </p>
                @endif

            </ul>
        </div>
    </section>

    <!-- Doubleurs/Doubleuses -->
    <section class="upcoming">
        <div class="container">
            <div class="flex-wrapper">
                <div class="title-wrapper">
                    <h2 class="h2 section-title">Doubleurs/Doubleuses</h2>
                </div>
            </div>
            <ul class="movies-list has-scrollbar">
                @if (count($doubleurs))
                @foreach ($doubleurs as $doubleur)

                <li>
                    <div class="movie-card">
                        <a href="{{ route('personnes.show', [$doubleur]) }}">
                            <figure class="card-banner">
                                <img class="img" src="{{ $doubleur->lien_photo }}" alt="Image de {{ $doubleur->nom }} ">
                            </figure>
                        </a>

                        <div class="title-wrapper">
                            <a href="{{ route('personnes.show', [$doubleur]) }}">
                                <h3 class="card-title">{{ $doubleur->nom }}</h3>
                            </a>
                        </div>
                    </div>
                </li>

                @endforeach
                @else
                <p> Pas de doubleurs </p>
                @endif

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
                <li>
                    <div class="movie-card">
                        <a href="{{ route('personnes.show', [$dateAnniversaire]) }}">
                            <figure class="card-banner">
                                <img class="img" src="{{ $dateAnniversaire->lien_photo }}" alt="Image de {{ $dateAnniversaire->nom }} ">
                        </a>
                        </figure>

                        <div class="title-wrapper">
                            <a href="{{ route('personnes.show', [$dateAnniversaire]) }}">
                                <h3 class="card-title">{{ $dateAnniversaire->nom }}</h3>
                            </a>
                        </div>
                    </div>
                </li>
                @endforeach
                @else
                <p> Aucun vieillissent ce mois-ci. </p>
                @endif

            </ul>
        </div>
    </section>

</main>
@endsection
