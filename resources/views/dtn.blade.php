<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    BOOSTRAP : --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{--    CSS PERSO : --}}
    <link rel="stylesheet" href="{{asset('css/dtn.css')}}">
    @yield('css')
    <title>Dans ton Netflix</title>
</head>



<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    {{--LOGO EN HAUT A GAUCHE : --}}
    <a class="navbar-brand" href="{{route('index')}}">DANS TON<img class="logo_left_side" src="{{asset('img/logo_netflix.png')}}" alt="logo netflix"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-around">
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pop_tvs')}}">Séries</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pop_movies')}}">Films</a>
            </li>
            <li>
                <form class="form-inline" method="GET" action="{{route('search')}}">
                    <input name="search" id="search" class="form-control mr-sm-2" type="text" placeholder="Que recherchez-vous ?" aria-label="Search">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="searchOption" id="serie" value="tv" checked>
                        <label class="form-check-label" for="serie">Série</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="searchOption" id="movie" value="movie">
                        <label class="form-check-label" for="movie">Film</label>
                    </div>
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </li>
            <li class="nav-item">
                @if (\Illuminate\Support\Facades\Auth::user())
                    <div class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{\Illuminate\Support\Facades\Auth::user()->pseudo}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="{{route('profile', ['id'=>\Illuminate\Support\Facades\Auth::user()->id])}}">Profil</a>
                            <a class="dropdown-item" href="{{route('friends',['id'=>\Illuminate\Support\Facades\Auth::user()->id])}}">Afficher mes amis</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Se déconnecter</a>
                        </div>
                    </div>
                    @else
                <a class="nav-link" href="{{route('index')}}">Se connecter</a>
                    @endif
            </li>
        </ul>
    </div>
</nav>

<div id="div-background">
    <span id="span-dark-background"></span>
    <img class="img-background" src="{{asset('img/background_home.jpg')}}" alt="image-background">
</div>

<main>

@yield('content')

</main>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@yield('javascript')

</body>
</html>
