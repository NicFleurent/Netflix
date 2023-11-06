@extends('layouts.app')

@section('title', 'Netflix - ' . $personne->nom )

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
        {{-- Affichage des rôles de la personne --}}
        <p>{{ $personne->role }}</p>

        {{-- Tableau filmographie --}}
        <table>
            <thead>
                <tr>
                    <th>Année</th>
                    <th>Titre</th>
                    <th>Rôle</th>
                </tr>
            </thead>
            <tbody>
                {{-- acteurs/actrices --}}
                @foreach($personne->filmsJoues as $listefilms)

                <tr>
                    <td>{{ $listefilms->annee_sortie }}</td>
                    <a href="#">
                        <td>{{ $listefilms->titre }}</td>
                        <img class="img" src="{{ $listefilms->lien_pochette }}" alt="Poster de {{ $listefilms->titre }}">
                    </a>

                    {{-- Initialisation des variables de rôle --}}
                    @php
                    $roleProducteur = "";
                    $roleRealisateur = "";
                    @endphp

                    {{-- Recherche des rôles dans les films --}}
                    @foreach ($personne->roles as $role)
                    @if ($role->id === $listefilms->producteur_id)
                    @php
                    $roleProducteur = "Producteur";
                    @endphp
                    @elseif($role->id === $listefilms->realisateur_id)
                    @php
                    $roleRealisateur = "Réalisateur";
                    @endphp
                    @endif
                    @endforeach

                    {{-- Affichage du rôle dans le tableau --}}
                    @if ($roleProducteur != "" || $roleRealisateur != "")
                    <td>{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') . ($roleRealisateur ? ', ' . $roleRealisateur : '') }}</td>
                    @else
                    <td>{{ $personne->role }}</td>
                    @endif
                    {{-- Rajouter les if ici pour realisateurs, producteurs --}}
                </tr>
                @endforeach

                {{-- réalisateur/réalisatrice --}}
                @foreach($personne->filmsRealises as $filmRealise)
                <tr>
                    <td>{{ $filmRealise->annee_sortie }}</td>
                    <a href="#">
                        <td>{{ $filmRealise->titre }}</td>
                        <img class="img" src="{{ $filmRealise->lien_pochette }}" alt="Poster de {{ $filmRealise->titre }}">
                    </a>
                    {{-- Initialisation des variables de rôle --}}
                    @php
                    $roleProducteur = "";
                    $roleRealisateur = "";
                    @endphp

                    {{-- Recherche des rôles dans les films --}}
                    @foreach ($personne->roles as $role)
                    @if ($personne->id === $filmRealise->producteur_id)
                    @php
                    $roleProducteur = "Producteur";
                    @endphp
                    @endif
                    @endforeach

                    {{-- Affichage du rôle dans le tableau --}}
                    @if ($roleProducteur != "")
                    <td>{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') }}</td>
                    @else
                    <td>{{ $personne->role }}</td>
                    @endif
                </tr>
                @endforeach

                {{-- producteurs/productrices --}}
                @foreach ($personne->filmsProduits as $filmProduit)
                @php
                $roleProducteur = "";
                $roleRealisateur = "";
                @endphp

                @foreach ($personne->roles as $role)
                @if ($role->id === $filmProduit->producteur_id)
                @php
                $roleProducteur = "Producteur";
                @endphp
                @elseif ($role->id === $filmProduit->realisateur_id)
                @php
                $roleRealisateur = "Réalisateur";
                @endphp
                @endif
                @endforeach

                {{-- Vérifiez si le producteur ID n'est pas égal à l'acteur ID --}}
                @if ($filmProduit->producteur_id != $personne->filmsJoues->acteurprincipal_id)
                <tr>
                    <td>{{ $filmProduit->annee_sortie }}</td>
                    <a href="#">
                        <td>{{ $filmProduit->titre }}</td>
                        <img class="img" src="{{ $filmProduit->lien_pochette }}" alt="Poster de {{ $filmProduit->titre }}">
                    </a>

                    {{-- Affichage du rôle dans le tableau --}}
                    @if ($roleProducteur != "" || $roleRealisateur != "")
                    <td>{{ $personne->role . ($roleProducteur ? ', ' . $roleProducteur : '') . ($roleRealisateur ? ', ' . $roleRealisateur : '') }}</td>
                    @else
                    <td>{{ $personne->role }}</td>
                    @endif
                </tr>
                @endif
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
