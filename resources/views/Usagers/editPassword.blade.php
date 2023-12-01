@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
<link rel="stylesheet" href="{{ asset('css/blockToast.css') }}">
@endsection

@section('title', 'Netflix - Modifier mon mot de passe')

@section('contenu')
<section class="upcoming">
    <div class="container">
        <div class="container">
            <form class="form " method="post" action="{{route('usagers.updatePassword', [$usager]) }}">
                <div class="title">Modifier mon compte</div>
                @csrf
                @method('patch')
                <div class="input-container ic1">
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

                <div class="filter-list lien-edit">
                    <button type="submit" class="btn btn-primary ">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection