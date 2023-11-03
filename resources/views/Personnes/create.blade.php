@extends('layouts.app')
@section('title', 'Ajouter personnes | Netflix')

@section('contenu')
<section class="upcoming">
    <div class="container">
        <form method="post" action="{{ route('personnes.store') }}">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="nomActeur" placeholder="Nom de la personne" name="nom">
                <input type="date" class="form-control" id="ddn" placeholder="Date de naissance"
                    name="date_naissance">
                <input type="text" class="form-control" id="lien_photo" placeholder="Lien photo de la personne"
                    name="lien_photo">

                <label for="role">Choisir un rôle:</label>
                <select class="form-control" name="role" id="role">
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

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</section>
@endsection
