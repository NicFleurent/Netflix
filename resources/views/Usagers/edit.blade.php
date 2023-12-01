@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('title', 'Netflix - Modifier mon compte')

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">
            <form class="form " method="post" action="{{route('usagers.update', [$usager]) }}">
                <div class="title">Modifier mon compte</div>
                @csrf
                @method('patch')
                <div class="input-container ic2">
                    <input type="text" class="input" id="email" placeholder=" " name="email" value="{{ old('email') == null ? $usager->email : old('email') }}">
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Email</label>
                </div>
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="text" class="input" id="nom" placeholder=" " name="nom" value="{{ old('nom') == null ? $usager->nom : old('nom') }}">
                    <div class="cut cut-short"></div>
                    <label for="nom" class="placeholder">Nom</label>
                </div>
                @if($errors->has('nom'))
                    <p>{{ $errors->first('nom') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="text" class="input" id="prenom" placeholder=" " name="prenom" value="{{ old('prenom') == null ? $usager->prenom : old('prenom') }}">
                    <div class="cut cut-prenom"></div>
                    <label for="prenom" class="placeholder">Prénom</label>
                </div>
                @if($errors->has('prenom'))
                    <p>{{ $errors->first('prenom') }}</p>
                @endif

                <div class="filter-list lien-edit">
                    <button type="submit" class="btn btn-primary ">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection