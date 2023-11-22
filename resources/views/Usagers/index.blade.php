@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/table.css') }}">
<link rel="stylesheet" href="{{ asset('css/modalTable.css') }}">
@endsection

@section('title', 'Netflix - Gestion Compte')

@section('contenu')
<section class="upcoming">
    <table>
        <caption>Liste des comptes</caption>
        <thead>
            <tr>
            <th scope="col">Nom d'utilisateur</th>
            <th scope="col">Rôle</th>
            <th scope="col">Email</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($usagers as $usager)
            <tr>
            <td data-label="Nom d'utilisateur">{{$usager->nomUsager}}</td>
            <td data-label="Rôle">{{$usager->role}}</td>
            <td data-label="Email">{{$usager->email}}</td>
            <td data-label="Nom">{{$usager->nom}}</td>
            <td data-label="Prénom">{{$usager->prenom}}</td>
            <td data-label=""><a id="{{$usager->id}}" href="#" class="cd-popup-trigger-acteur">Supprimer</a></ion-icon></td>
            </tr>

            <!-- Modal Suppresion -->
            <div id="{{$usager->id}}" class="cd-popup-acteur" role="alert">
                <div class="cd-popup-container">
                    <p>Voulez-vous vraiment supprimer ce compte?</p>
                    <ul class="cd-buttons">
                        <li>
                            <form action="{{route('usagers.destroyAdmin', [$usager])}}" method="post">
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
            @endforeach
        </tbody>
    </table>
</section>
@endsection