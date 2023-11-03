@extends('layouts.app')

@section('title', 'Ajouter un film | Netflix')

@section('contenu')
    <section class="upcoming">
        <div class="container">

            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="post" action="{{ route('films.store') }}">
                @csrf
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre" value="{{ old('titre') }}">
                </div>
                <div class="form-group">
                    <label for="resume">Synopsis</label>
                    <input type="text" class="form-control" id="resume" placeholder="Synopsis" name="resume" value="{{ old('resume') }}">
                </div>
                <div class="form-group">
                    <label for="duree">Durée (en minutes)</label>
                    <input type="number" class="form-control" id="duree" placeholder="Durée" name="duree" value="{{ old('duree') }}">
                </div>
                <div class="form-group">
                    <label for="annee_sortie">Année de sortie</label>
                    <input type="number" class="form-control" id="annee_sortie" placeholder="Année" name="annee_sortie" value="{{ old('annee_sortie') }}">
                </div>
                <div class="form-group">
                    <label for="lien_film">Lien du trailer (Prendre la source d'un embed)</label>
                    <input type="text" class="form-control" id="lien_film" placeholder="Lien du trailer" name="lien_film" value="{{ old('lien_film') }}">
                </div>
                <div class="form-group">
                    <label for="lien_pochette">Lien du poster (image)</label>
                    <input type="text" class="form-control" id="lien_pochette" placeholder="Lien du poster" name="lien_pochette" value="{{ old('lien_pochette') }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" id="type" placeholder="Type" name="type" value="{{ old('type') }}">
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" class="form-control" id="genre" placeholder="Genre" name="genre" value="{{ old('genre') }}">
                </div>
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <input type="text" class="form-control" id="brand" placeholder="Marque" name="brand" value="{{ old('brand') }}">
                </div>
                <div class="form-group">
                    <label for="cote">Cote</label>
                    <input type="number" class="form-control" id="cote" placeholder="Cote" name="cote" value="{{ old('cote') }}">
                </div>
                <div class="form-group">
                    <label for="rating">Classification</label>
                    <select class="form-control" id="rating" name="rating">
                        <option value="G">G</option>
                        <option value="PG">PG</option>
                        <option value="PG-13">PG-13</option>
                        <option value="R">R</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="realisateur_id">Réalisateur</label>
                    <select class="form-control" id="realisateur_id" name="realisateur_id">
                        <option value="">Veuillez choisir un réalisateur</option>
        
                        @foreach($personnes as $personne)
                                <option value="{{ $personne->id }}">
                                    {{ $personne->id == old('personne_id') ? 'selected' : null }}
                                    {{ $personne->nom }}
                                </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="producteur_id">Producteur</label>
                    <select class="form-control" id="producteur_id" name="producteur_id">
                        <option value="">Veuillez choisir un producteur</option>
        
                        @foreach($personnes as $personne)
                                <option value="{{ $personne->id }}">
                                    {{ $personne->id == old('personne_id') ? 'selected' : null }}
                                    {{ $personne->nom }}
                                </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="acteurprincipal_id">Acteur principal</label>
                    <select class="form-control" id="acteurprincipal_id" name="acteurprincipal_id">
                        <option value="">Veuillez choisir un acteur principal</option>
        
                        @foreach($personnes as $personne)
                                <option value="{{ $personne->id }}">
                                    {{ $personne->id == old('personne_id') ? 'selected' : null }}
                                    {{ $personne->nom }}
                                </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </main>
@endsection