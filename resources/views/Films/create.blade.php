@extends('layouts.app')

@section('title', 'Ajouter un film | Netflix')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blockToast.css') }}">
@endsection

@section('contenu')
    <section class="upcoming">
        <div class="container">

            <form class="form" method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="title">Ajouter du contenu</div>
                <div class="input-container ic1">
                    <input id="titre" class="input" type="text" placeholder=" " name="titre" value="{{ old('titre') }}"/>
                    <div class="cut cut-titre"></div>
                    <label for="titre" class="placeholder">Titre</label>
                </div>
                @if($errors->has('titre'))
                    <p>{{ $errors->first('titre') }}</p>
                @endif

                <div class="input-container-textarea ic2">
                    <textarea id="resume" class="input" name="resume" placeholder=" ">{{ old('resume') }}</textarea>              
                    <div class="cut cut-synopsis"></div>                   
                    <label for="titre" class="placeholder">Synopsis</label>
                </div>
                @if($errors->has('resume'))
                    <p>{{ $errors->first('resume') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="duree" class="input" type="number" placeholder=" " name="duree" value="{{ old('duree') }}"/>
                    <div class="cut cut-duree"></div>
                    <label for="titre" class="placeholder">Durée</label>
                </div>
                @if($errors->has('duree'))
                    <p>{{ $errors->first('duree') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="annee_sortie" class="input" type="number" placeholder=" " name="annee_sortie" value="{{ old('annee_sortie') }}"/>
                    <div class="cut cut-annee"></div>
                    <label for="titre" class="placeholder">Année de sortie</label>
                </div>
                @if($errors->has('annee_sortie'))
                    <p>{{ $errors->first('annee_sortie') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="lien_film" class="input" type="text" placeholder=" " name="lien_film" value="{{ old('lien_film') }}"/>
                    <div class="cut cut-trailer"></div>
                    <label for="titre" class="placeholder">Lien du trailer (Prendre la source d'un embed)</label>
                </div>
                @if($errors->has('lien_film'))
                    <p>{{ $errors->first('lien_film') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="genre" class="input" type="text" placeholder=" " name="genre" value="{{ old('genre') }}"/>
                    <div class="cut cut-genre"></div>
                    <label for="titre" class="placeholder">Genre</label>
                </div>
                @if($errors->has('genre'))
                    <p>{{ $errors->first('genre') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="brand" class="input" type="text" placeholder=" " name="brand" value="{{ old('brand') }}"/>
                    <div class="cut cut-marque"></div>
                    <label for="titre" class="placeholder">Marque</label>
                </div>
                @if($errors->has('brand'))
                    <p>{{ $errors->first('brand') }}</p>
                @endif

                <div class="input-container ic2">
                    <input id="cote" class="input" type="number" placeholder=" " name="cote" value="{{ old('cote') }}" step=".1"/>
                    <div class="cut cut-cote"></div>
                    <label for="titre" class="placeholder">Cote</label>
                </div>
                @if($errors->has('cote'))
                    <p>{{ $errors->first('cote') }}</p>
                @endif

                <div class="input-container ic2 txt-jaune ">
                 <label for="lien_pochette"> Sélectionner une image </label>
                 <input type="file"  id="lien_pochette"  name="lien_pochette">          
                </div>
                @if($errors->has('lien_pochette'))
                    <p class="erreur-margin">{{ $errors->first('lien_pochette') }}</p>
                @endif

                <div class="select-group">
                    <div class="select-subgroup">
                        <label for="type">Type</label>
                        <div class="select select-classification">
                            <select class="form-control" id="type" name="type">
                                <option value="">Choisir</option>
                                <option value="film" {{ "film" == old('type') ? 'selected' : null }}>film</option>
                                <option value="serie" {{ "serie" == old('type') ? 'selected' : null }}>serie</option>
                                <option value="anime" {{ "anime" == old('type') ? 'selected' : null }}>anime</option>
                            </select>
                        </div>
                        @if($errors->has('type'))
                            <span>{{ $errors->first('type') }}</span>
                        @endif
                    </div>
                    <div class="select-subgroup">
                        <label for="rating">Classification</label>
                        <div class="select select-classification">
                            <select class="form-control" id="rating" name="rating">
                                <option value="">Choisir</option>
                                <option value="G" {{ "G" == old('rating') ? 'selected' : null }}>G</option>
                                <option value="PG" {{ "PG" == old('rating') ? 'selected' : null }}>PG</option>
                                <option value="PG-13" {{ "PG-13" == old('rating') ? 'selected' : null }}>PG-13</option>
                                <option value="R" {{ "R" == old('rating') ? 'selected' : null }}>R</option>
                            </select>
                        </div>
                        @if($errors->has('rating'))
                            <span>{{ $errors->first('rating') }}</span>
                        @endif
                    </div>
                    <div class="select-subgroup">
                        <label for="realisateur_id">Réalisateur</label>
                        <div class="select">
                            <select class="form-control" id="realisateur_id" name="realisateur_id">
                                <option value="">Veuillez choisir un réalisateur</option>
                
                                @foreach($personnes as $personne)
                                        <option value="{{ $personne->id }}" {{ $personne->id == old('realisateur_id') ? 'selected' : null }}>
                                            {{ $personne->nom }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('realisateur_id'))
                            <span>{{ $errors->first('realisateur_id') }}</span>
                        @endif
                    </div>
                    <div class="select-subgroup">
                        <label for="producteur_id">Producteur</label>
                        <div class="select">
                            <select class="form-control" id="producteur_id" name="producteur_id">
                                <option value="">Veuillez choisir un producteur</option>
                
                                @foreach($personnes as $personne)
                                        <option value="{{ $personne->id }}" {{ $personne->id == old('producteur_id') ? 'selected' : null }}>
                                            {{ $personne->nom }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('producteur_id'))
                            <span>{{ $errors->first('producteur_id') }}</span>
                        @endif
                    </div>
                    <div class="select-subgroup">
                        <label for="acteurprincipal_id">Acteur Principal</label>
                        <div class="select">
                            <select class="form-control" id="acteurprincipal_id" name="acteurprincipal_id">
                                <option value="">Veuillez choisir un acteur principal</option>
                
                                @foreach($personnes as $personne)
                                        <option value="{{ $personne->id }}" {{ $personne->id == old('acteurprincipal_id') ? 'selected' : null }}>
                                            {{ $personne->nom }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->has('acteurprincipal_id'))
                            <span>{{ $errors->first('acteurprincipal_id') }}</span>
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