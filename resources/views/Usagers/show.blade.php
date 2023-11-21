@extends('layouts.app')

@section('title', 'Netflix - Mon compte')

@section('contenu')
    @foreach($usagers as $usager)
        <section class="zoomFilm">
            <div class="container">
                
                <h1 class="h1 section-title">{{$usager->nomUsager}}</h1>
                <div class="presentation-compte">
                    <div class="information">
                        <div class="bloc-info">
                            <div class="text-info">Email : <span>{{$usager->email}}</span></div>
                            <div class="text-info">Type de compte : <span>{{$usager->role}}</span></div>
                            <div class="text-info">Nom : <span>{{$usager->nom}}</span></div>
                            <div class="text-info">Prénom: <span>{{$usager->prenom}}</span></div>
                        </div>
                    </div>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">Déconnexion</button>
                    </form>
                </div>
            </div>
        </section>
    @endforeach
@endsection