@extends('layouts.app')

@section('title', 'Ajouter une relation | Netflix')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('contenu')
    <section class="upcoming">
        <div class="container">

            <form class="form" method="post" action="{{ route('films.storeActeurFilm') }}">
                @csrf
                <div class="title">Ajouter une relation contenu - acteur</div>
                <div class="select-group">
                    <div class="select-subgroup">
                        <label for="film_id">Contenu</label>
                        <div class="select">
                            <select class="form-control" id="film_id" name="film_id">
                                <option value="">Veuillez choisir un contenu</option>
                
                                @foreach($films as $film)
                                        <option value="{{ $film->id }}" {{ $film->id == old('film_id') ? 'selected' : null }}>
                                            {{ $film->titre }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('film_id'))
                            <span>{{ $errors->first('film_id') }}</span>
                        @endif
                    </div>
                    <div class="select-subgroup">
                        <label for="personne_id">Acteur</label>
                        <div class="select">
                            <select class="form-control" id="personne_id" name="personne_id">
                                <option value="">Veuillez choisir un acteur</option>
                
                                @foreach($personnes as $personne)
                                        <option value="{{ $personne->id }}" {{ $personne->id == old('personne_id') ? 'selected' : null }}>
                                            {{ $personne->nom }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('personne_id'))
                            <span>{{ $errors->first('personne_id') }}</span>
                        @endif
                    </div>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </main>
@endsection