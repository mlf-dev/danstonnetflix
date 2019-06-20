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
    <a class="navbar-brand" href="#">DANS TON<img class="logo_left_side" src="{{asset('img/logo_netflix.png')}}" alt="logo netflix"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex justify-content-around">
            <li class="nav-item">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Toutes les séries</a>
            </li>
            <li>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher une série" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Se connecter</a>
            </li>
        </ul>
    </div>
</nav>

<main>

@yield('content')

</main>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
