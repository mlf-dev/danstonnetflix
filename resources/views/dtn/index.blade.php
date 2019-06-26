@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')


<div id="maincontainer" class="container">

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

    <div class="row content">

        <div class="col-md-8 offset-md-2 background-dark-opactiy">
            <div class="row">
                <div id="home-text-left" class=" col-6">

                    <p class="align-bottom">Envie de partager ce que vous regardez sur Netflix sans passer des heures à chercher le nom d'une série ?
                        <br>Avec Dans ton Netflix, ajoutez progressivement vos séries et partagez les avec votre entourage en un clic !<br>
                        @if(!\Illuminate\Support\Facades\Auth::user())
                        Pas encore de compte?<br>
                        <a href="{{route('register')}}" id="a-inscrivez-vous">Inscrivez-vous</a></p>
                        @endif
                </div>

                @if(\Illuminate\Support\Facades\Auth::user())

                    <div id="search-div" class="col-md-6">
                        <h1>Rechercher :</h1>
                        <form method="GET" action="{{route('search')}}">
                            <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Que recherchez-vous ?" aria-label="Search">
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="searchOption" id="serie" value="tv" checked>
                                <label class="form-check-label" for="serie">Série</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="searchOption" id="movie" value="movie">
                                <label class="form-check-label" for="movie">Film</label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="searchOption" id="user" value="user">
                                <label class="form-check-label" for="serie">Utilisateur</label>
                            </div>
                            <br>
                            <button class="btn-rechercher-index btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>

                    @else
                        <div class="sidentifier col-6">

                            <h1>S'identifier</h1>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="text" class="form-control input-log @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    <input id="password" type="password" class="form-control input-log @error('password') is-invalid @enderror" placeholder="Mot de passe" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                    <button class="btn btn-sidentifier" type="submit">S'identifier</button>

                                </div>
                            </form>

                        </div>
                    @endif
            </div>

        </div>



    </div>

</div>

@endsection