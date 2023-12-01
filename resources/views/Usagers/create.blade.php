@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
<link rel="stylesheet" href="{{ asset('css/blockToast.css') }}">
@endsection

@section('title', 'Netflix - Créer un compte')

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">
            <form class="form " method="post" action="{{route('usagers.store') }}">
                <div class="title">Créer un compte</div>
                @csrf
                <div class="input-container ic1">
                    <input type="text" class="input" id="nomUsager" placeholder=" " name="nomUsager" value="{{ old('nomUsager')}}">
                    <div class="cut cut-user"></div>
                    <label for="nomUsager" class="placeholder">Nom d'usager</label>
                </div>
                @if($errors->has('nomUsager'))
                    <p>{{ $errors->first('nomUsager') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="password" class="input" id="password" placeholder=" " name="password" value="{{ old('password')}}">
                    <div class="cut cut-user"></div>
                    <label for="password" class="placeholder">Mot de passe</label>
                </div>
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="password" class="input" id="password_confirmation" placeholder=" " name="password_confirmation" value="{{ old('password_confirmation')}}">
                    <div class="cut cut-user-confirm-mdp"></div>
                    <label for="password_confirmation" class="placeholder">Confirmer le mot de passe</label>
                </div>
                @if($errors->has('password_confirmation'))
                    <p>{{ $errors->first('password_confirmation') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="text" class="input" id="email" placeholder=" " name="email" value="{{ old('email')}}">
                    <div class="cut cut-short"></div>
                    <label for="email" class="placeholder">Email</label>
                </div>
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="text" class="input" id="nom" placeholder=" " name="nom" value="{{ old('nom')}}">
                    <div class="cut cut-short"></div>
                    <label for="nom" class="placeholder">Nom</label>
                </div>
                @if($errors->has('nom'))
                    <p>{{ $errors->first('nom') }}</p>
                @endif
                <div class="input-container ic2">
                    <input type="text" class="input" id="prenom" placeholder=" " name="prenom" value="{{ old('prenom')}}">
                    <div class="cut cut-prenom"></div>
                    <label for="prenom" class="placeholder">Prénom</label>
                </div>
                @if($errors->has('prenom'))
                    <p>{{ $errors->first('prenom') }}</p>
                @endif

                <div class="select-group">
                    <div class="select-subgroup">
                        <label for="role">Type de compte</label>
                        <div class="select select-classification">
                            <select class="form-control" id="role" name="role">
                                <option value="">Choisir</option>
                                @role('admin')
                                <option value="admin" {{ "normal" == old('role') ? 'selected' : null }}>admin</option>
                                @endrole
                                <option value="normal" {{ "normal" == old('role') ? 'selected' : null }}>normal</option>
                                <option value="enfant" {{ "enfant" == old('role') ? 'selected' : null }}>enfant</option>
                            </select>
                        </div>
                        @if($errors->has('role'))
                            <span>{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>

                <div class="filter-list lien-edit">
                    <button type="submit" class="btn btn-primary ">Créer</button>
                </div>
            </form>

            <div class="button-group button-ajout">
                <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Se connecter</button></a>
            </div>
        </div>
    </div>
</section>

@endsection