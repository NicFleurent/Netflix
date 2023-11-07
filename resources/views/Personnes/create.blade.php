@extends('layouts.app')
@section('title', 'Ajouter personnes | Netflix')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('contenu')
    <section   class="upcoming">
        <div class="container">
            <form class="form "method="post" action="{{ route('personnes.store') }}">
         <div class="title">Ajouter une personne</div>
                @csrf
                <div class="input-container ic1">
                    <input type="text" class="input" id="nomActeur" placeholder=" " name="nom">
                  <div class="cut cut-short"></div>
                  <label for="nomActeur" class="placeholder">Nom</label>
                </div>
                
                <div class="input-container ic2">
                <input type="date" class="input" id="ddn" placeholder=" " name="date_naissance">
                  <div class="cut cut-ddn"></div>
                  <label for="ddn" class="placeholder">Date de naissance</label>
                </div>

                <div class="input-container ic2">
                <input type="text" class=" input" id="lien_photo" placeholder=" "
                        name="lien_photo">
                  <div class="cut cut-lien"></div>
                  <label for="lien_photo" class="placeholder">Lien photo de la personne</label>
                </div>
                                  
                <div id="role" class="select-subgroup">
                        <label for="role">Choisir un rôle</label>
                        <div class="select select-classification">
                            <select class="form-control" id="rating" name="rating">
                            <option value="Acteur">Acteur</option>
                        <option value="Actrice">Actrice</option>
                        <option value="Producteur">Producteur</option>
                        <option value="Productrice">Productrice</option>
                        <option value="Réalisateur">Réalisateur</option>
                        <option value="Réalisatrice">Réalisatrice</option>
                        <option value="Doubleur">Doubleur</option>
                        <option value="Doubleuse">Doubleuse</option>
                            </select>
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </section>
@endsection
