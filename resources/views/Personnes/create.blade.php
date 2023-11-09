@extends('layouts.app')

@section('title', 'Ajouter personnes | Netflix')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">

            <form class="form " method="post" action="{{route('personnes.store') }}">
                <div class="title">Ajouter une personne</div>
                @csrf
                <div class="input-container ic1">
                    <input type="text" class="input" id="nomActeur" placeholder=" " name="nom" value="{{ old('nom')}}">
                    <div class="cut cut-short"></div>
                    <label for="nomActeur" class="placeholder">Nom</label>
                </div>
                @if($errors->has('nom'))
                <p>{{ $errors->first('nom') }}</p>
                @endif

                <div class="input-container ic2">
                    <input type="date" class="input" id="ddn" placeholder=" " name="date_naissance" value="{{ old('date_naissance')}}">
                    <div class="cut cut-ddn"></div>
                    <label for="ddn" class="placeholder">Date de naissance</label>
                </div>
                @if($errors->has('date_naissance'))
                <p>{{ $errors->first('date_naissance') }}</p>
                @endif

                <div class="input-container ic2">
                    <input type="text" class=" input" id="lien_photo" placeholder=" " name="lien_photo" value="{{ old('lien_photo')}}">
                    <div class="cut cut-lien"></div>
                    <label for="lien_photo" class="placeholder">Lien photo de la personne</label>
                </div>
                @if($errors->has('lien_photo'))
                <p>{{ $errors->first('lien_photo') }}</p>
                @endif

                <div class="select-subgroup">
                    <label for="role">Choisir un rôle</label>
                    <div class="select select-role">
                        <select class="form-control" id="rating" name="role">
                            <option value="">Choisir</option>
                            <option value="Acteur" {{"Acteur" == old('role') ? 'selected' :null}}>Acteur</option>
                            <option value="Actrice" {{"Actrice" == old('role') ? 'selected' :null}}>Actrice</option>
                            <option value="Producteur" {{"Producteur" == old('role') ? 'selected' :null}}>Producteur</option>
                            <option value="Productrice" {{"Productrice" == old('role') ? 'selected' :null}}>Productrice</option>
                            <option value="Réalisateur" {{"Réalisateur" == old('role') ? 'selected' :null}}>Réalisateur</option>
                            <option value="Réalisatrice" {{"Réalisatrice" == old('role') ? 'selected' :null}}>Réalisatrice</option>
                            <option value="Doubleur" {{"Doubleur" == old('role') ? 'selected' :null}}>Doubleur</option>
                            <option value="Doubleuse" {{"Doubleuse" == old('role') ? 'selected' :null}}>Doubleuse</option>
                        </select>
                    </div>
                    @if($errors->has('role'))
                    <p>{{ $errors->first('role') }}</p>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
</section>
@endsection