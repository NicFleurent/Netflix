@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/acteurs.css') }}">
@endsection

@section('title', 'Netflix - ' . $personne->nom)

@section('contenu')
@if (isset($personne))
<section class="zoomFilm">
    @role('admin')
    <div class="lien-edit">
        <a href="{{route('personnes.edit', [$personne])}}">
            <ion-icon name="construct-outline"></ion-icon>
            <data>Mettre à jour</data>
        </a>

        <a href="#0" class=" cd-popup-trigger">
            <ion-icon name="remove-circle-outline"></ion-icon>
            <data>Supprimer</data>
        </a>
    </div>
    @endrole
    <div class="container">
        <h1 class="h1 section-title">{{ $personne->nom }}</h1>
        <div class="presentation">
            <div class="image">
                <img src="{{ $personne->lien_photo }}" alt="Image de {{ $personne->nom }} ">
            </div>
            <div class="information">
                <div>
                    <div class="text-info bloc-resume">Date de naissance :
                        <span>{{$personne->date_naissance}}</span>
                    </div>
                    {{-- Tableau filmographie --}}
                    <div>
                        <h3>Filmographie</h3>
                        <table>
                            <thead class="txt-blanc">
                                <tr class="centrer">
                                    <th>Année</th>
                                    <th>Film(s)</th>
                                    <th>Rôle(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- acteurs/actrices --}}
                                @foreach ($personne->filmsJouesAP->merge($personne->filmsJoues)->sortBy('annee_sortie') as $filmJoue)
                                <tr class="centrer">
                                    <td>{{ $filmJoue->annee_sortie }}</td>
                                    <td>
                                        <a class="lienFilmo" href="{{ route('films.show', ['film' => $filmJoue->id]) }}">
                                            <img src="{{ $filmJoue->lien_pochette }}" alt="Poster de {{ $filmJoue->titre }}">
                                            <span>{{ $filmJoue->titre }}</span>
                                        </a>
                                    </td>


                                    {{-- Initialisation des variables de rôle --}}
                                    @php
                                    $roleProducteur = '';
                                    $roleRealisateur = '';
                                    @endphp
                                    @if ($personne->id === $filmJoue->producteur_id)
                                    @php
                                    $roleProducteur = 'Producteur';
                                    @endphp

                                    @elseif($personne->id === $filmJoue->realisateur_id)
                                    @php
                                    $roleRealisateur = 'Réalisateur';
                                    @endphp
                                    @endif

                                    {{-- Affichage du rôle dans le tableau --}}
                                    @if ($roleProducteur != '' || $roleRealisateur != '')
                                    <td class="centrer">{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') . ($roleRealisateur ? ', ' . $roleRealisateur : '') }}
                                    </td>
                                    @else
                                    <td>{{ $personne->role }}</td>
                                    @endif
                                </tr>
                                </tr>
                                @endforeach

                                {{-- producteurs/productrices --}}
                                @foreach ($personne->filmsProduits as $filmProduit)
                                @if (!$personne->filmsJouesAP->contains($filmProduit) && !$personne->filmsRealises->contains($filmProduit))
                                <tr class="centrer">
                                    <td>{{ $filmProduit->annee_sortie }}</td>
                                    <td>
                                        <a class="lienFilmo" href="{{ route('films.show', ['film' => $filmProduit->id]) }}">


                                            <img src="{{ $filmProduit->lien_pochette }}" alt="Poster de {{ $filmProduit->titre }}">
                                            <span>{{ $filmProduit->titre }}</span>
                                        </a>
                                    </td>
                                </tr>

                                {{-- Initialisation des variables de rôle --}}
                                @php
                                $roleActeur = '';
                                $roleRealisateur = '';
                                @endphp

                                @foreach ($personne->roles as $role)
                                @if ($role->id === $listefilms->realisateur_id)
                                @php
                                $roleRealisateur = 'Réalisateur';
                                @endphp
                                @elseif($role->id === $listefilms->acteurprincipal_id)
                                @php
                                $roleActeur = 'Acteur';
                                @endphp
                                @endif
                                @endforeach

                                {{-- Affichage du rôle dans le tableau --}}
                                @if ($roleActeur != '' || $roleRealisateur != '')
                                <td>{{ $personne->role . ($roleActeur ? ', ' . $roleActeur : '') . ($roleRealisateur ? ', ' . $roleRealisateur : '') }}
                                </td>
                                @else
                                <td>{{ $personne->role }}</td>
                                @endif
                                @endif
                                @endforeach

                                {{-- réalisateur/réalisatrice --}}
                                @foreach ($personne->filmsRealises as $filmRealise)
                                <tr class="centrer">
                                    <td>{{ $filmRealise->annee_sortie }}</td>
                                    <td> <a class="lienFilmo" href="{{ route('films.show', ['film' => $filmRealise->id]) }}">
                                            <img src="{{ $filmRealise->lien_pochette }}" alt="Poster de {{ $filmRealise->titre }}">
                                            <span>{{ $filmRealise->titre }}</span>
                                        </a>
                                    </td>
                                    {{-- Initialisation des variables de rôle --}}
                                    @php
                                    $roleProducteur = '';
                                    $roleRealisateur = '';
                                    @endphp

                                    {{-- Recherche des rôles dans les films --}}
                                    @if ($personne->id === $filmRealise->producteur_id)
                                    @php
                                    $roleProducteur = 'Producteur';
                                    @endphp
                                    @endif

                                    {{-- Affichage du rôle dans le tableau --}}
                                    @if ($roleProducteur != '')
                                    <td>{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') }}</td>
                                    @else
                                    <td>{{ $personne->role }}</td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- fin div container -->
</section>

@role('admin')
<!-- Modal Suppresion Film -->
<div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>Voulez-vous vraiment supprimer cette personne?</p>
        <ul class="cd-buttons">
            <li>
                <form action="{{route('personnes.destroy', [$personne->id]) }}" method="post">
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