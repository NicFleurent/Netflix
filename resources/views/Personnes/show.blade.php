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
        <p> {{ $personne->role }}</p>

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
                @foreach($personne->filmsJoues as $listefilms)
                <tr>
                    <td>{{$listefilms->annee_sortie}}</td>
                    <a href="">
                        <td>{{$listefilms->titre}}</td>
                        <img class="img" src="{{ $listefilms->lien_pochette }}" alt="Poster de {{ $listefilms->titre }} ">
                    </a>

                    <td>{{ $personne->role }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endif
@endsection
