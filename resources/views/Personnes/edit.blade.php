@extends('layouts.app')

@section('title', 'Ajouter personnes | Netflix')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
<link rel="stylesheet" href="{{ asset('css/blockToast.css') }}">
@endsection

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">

            <form class="form " method="post" action="{{ route('personnes.update', [$personne]) }}" enctype="multipart/form-data">
                <div class="title">Modifier</div>
                @csrf
                @method('patch')
                <div class="input-container ic1">
                    <input type="text" class="input" id="nomActeur" placeholder=" " name="nom" value="{{ old('nom') == null ? $personne->nom : old('nom') }}">
                    <div class="cut cut-short"></div>
                    <label for="nomActeur" class="placeholder">Nom</label>
                </div>
                @if($errors->has('nom'))
                <p>{{ $errors->first('nom') }}</p>
                @endif

                <div class="input-container ic2">
                    <input type="date" class="input" id="ddn" placeholder=" " name="date_naissance" value="{{ old('date_naissance') == null ? $personne->date_naissance : old('date_naissance') }}">
                    <div class="cut cut-ddn"></div>
                    <label for="ddn" class="placeholder">Date de naissance</label>
                </div>
                @if($errors->has('date_naissance'))
                <p>{{ $errors->first('date_naissance') }}</p>
                @endif

                <div class="input-container ic2 txt-jaune">
                    <label for="lien_photo"> Sélectionner une image </label>
                    <input type="file" id="lien_photo" name="lien_photo">
                </div>
                @if($errors->has('lien_photo'))
                <p class="erreur-margin">{{ $errors->first('lien_photo') }}</p>
                @endif

                <div class="select-subgroup">
                    <label for="role">Choisir un rôle</label>
                    <div class="select select-role">
                        <select class="form-control" id="rating" name="role">
                            <option value="">Choisir</option>
                            <option value="Acteur" {{"Acteur" == $personne->role ? 'selected' : null}}>Acteur</option>
                            <option value="Actrice" {{"Actrice" == $personne->role ? 'selected' :null}}>Actrice</option>
                            <option value="Producteur" {{"Producteur" == $personne->role ? 'selected' :null}}>Producteur</option>
                            <option value="Productrice" {{"Productrice" == $personne->role ? 'selected' :null}}>Productrice</option>
                            <option value="Réalisateur" {{"Réalisateur" == $personne->role ? 'selected' :null}}>Réalisateur</option>
                            <option value="Réalisatrice" {{"Réalisatrice" == $personne->role ? 'selected' :null}}>Réalisatrice</option>
                            <option value="Doubleur" {{"Doubleur" == $personne->role ? 'selected' :null}}>Doubleur</option>
                            <option value="Doubleuse" {{"Doubleuse" == $personne->role ? 'selected' :null}}>Doubleuse</option>
                        </select>
                    </div>
                    @if($errors->has('role'))
                    <p>{{ $errors->first('role') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
</section>
@endsection