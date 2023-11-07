@extends('layouts.app')

@section('title', 'Netflix - ' . $personne->nom)

@section('contenu')
    @if (isset($personne))
        <section>
            <div class="container">
                <h1 class="h1 section-title">{{ $personne->nom }}</h1>
                <div class="presentation">
                    <div class="image">
                        <img class="img" src="{{ $personne->lien_photo }}" alt="Image de {{ $personne->nom }} ">
                    </div>
                    <div class="title-wrapper">
                    </div>
                </div>
                <p>{{ $personne->date_naissance }}</p>

                {{-- Tableau filmographie --}}
                <table>
                    <thead>
                        <tr>
                            <th>Année</th>
                            <th>Titre</th>
                            <th>Rôle(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- acteurs/actrices --}}
                        @foreach ($personne->filmsJoues as $listefilms)
                            {{-- @php
                                dd($personne->roles);
                            @endphp --}}

                            <tr>
                                <td>{{ $listefilms->annee_sortie }}</td>
                                <td> <a href="#">
                                        {{ $listefilms->titre }}
                                        <img class="img" src="{{ $listefilms->lien_pochette }}"
                                            alt="Poster de {{ $listefilms->titre }}">
                                </td>
                                </a>

                                {{-- Initialisation des variables de rôle --}}
                                @php
                                    $roleProducteur = '';
                                    $roleRealisateur = '';
                                @endphp

                                {{-- Recherche des rôles dans les films --}}
                                @foreach ($personne->roles as $role)
                                    @if ($role->id === $listefilms->producteur_id)
                                        @php
                                            $roleProducteur = 'Producteur';
                                        @endphp
                                    @elseif($role->id === $listefilms->realisateur_id)
                                        @php
                                            $roleRealisateur = 'Réalisateur';
                                        @endphp
                                    @endif
                                @endforeach

                                {{-- Affichage du rôle dans le tableau --}}
                                @if ($roleProducteur != '' || $roleRealisateur != '')
                                    <td>{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') . ($roleRealisateur ? ', ' . $roleRealisateur : '') }}
                                    </td>
                                @else
                                    <td>{{ $personne->role }}</td>
                                @endif
                            </tr>
                            </tr>
                        @endforeach

                        {{-- producteurs/productrices --}}
                        @foreach ($personne->filmsProduits as $filmProduit)
                            @if (!$personne->filmsJoues->contains($filmProduit) && !$personne->filmsRealises->contains($filmProduit))
                                <tr>
                                    <td>{{ $filmProduit->annee_sortie }}</td>
                                    <td> <a href="#">
                                            {{ $filmProduit->titre }}
                                            <img class="img" src="{{ $filmProduit->lien_pochette }}"
                                                alt="Poster de {{ $filmProduit->titre }}">
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
                            <tr>
                                <td>{{ $filmRealise->annee_sortie }}</td>
                                <a href="#">
                                    <td>{{ $filmRealise->titre }}</td>
                                    <img class="img" src="{{ $filmRealise->lien_pochette }}"
                                        alt="Poster de {{ $filmRealise->titre }}">
                                </a>
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
        </section>

        </table>
        </div>
        </section>
    @endif
@endsection
