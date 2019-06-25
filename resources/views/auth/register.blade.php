@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/register/register.css')}}">
@endsection

@section('content')
<div class="container">

    <div id="bigLogoContainer">
        <div class="row">
            <div class="col-6 offset-md-3">
                <h1>Dans ton </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-md-4">
                <img id="logo_entier_netflix" src="{{asset('img/logo_entier_netflix.png')}}" alt="Dans ton Netflix">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h3>Inscription</h3></div>

                <div class="card-body justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input placeholder="Pseudo" id="pseudo" type="text" class="input-register form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>

                                @error('pseudo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input placeholder="Email" id="email" type="email" class="input-register form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input placeholder="Mot de passe" id="mdp" type="password" class="input-register form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('mdp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2">
                                <input placeholder="Confirmez votre mot de passe" id="password-confirm" type="password" class="input-register form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-7">
                                <button type="submit" class="btn btn-senregistrer">
                                    S'inscrire
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
