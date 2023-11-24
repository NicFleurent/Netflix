@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('title', 'Netflix - Connexion')

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">
            <form class="form " method="post" action="{{route('login') }}">
                <div class="title">Se connecter</div>
                @csrf
                <div class="input-container ic1">
                    <input type="text" class="input" id="nomUsager" placeholder=" " name="nomUsager" value="{{ old('nomUsager')}}">
                    <div class="cut cut-short"></div>
                    <label for="nomUsager" class="placeholder">Nom d'usager</label>
                </div>
                <div class="input-container ic2">
                    <input type="password" class="input" id="password" placeholder=" " name="password" value="{{ old('password')}}">
                    <div class="cut cut-ddn"></div>
                    <label for="password" class="placeholder">Mot de passe</label>
                </div>

                <div class="filter-list lien-edit">
                    <button type="submit" class="btn btn-primary ">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection