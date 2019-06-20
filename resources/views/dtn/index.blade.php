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

        <div class="col-8 offset-2 background-dark-opactiy">
            <div class="row">
                <div id="home-text-left" class=" col-6">

                    <p class="align-bottom">Envie de partager ce que vous regardez sur Netflix sans passer des heures à chercher le nom d'une série ?
                        <br>Avec Dans ton Netflix, ajoutez progressivement vos séries et partagez les avec votre entourage en un clic !<br>
                        Pas encore de compte?<br>
                        <a href="#" id="a-inscrivez-vous">Inscrivez-vous</a></p>
                </div>

                <div class="sidentifier col-6">

                    <h1>S'identifier</h1>

                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control input-log" placeholder="Email">
                            <input type="password" class="form-control input-log" placeholder="Mot de passe">
                            <button class="btn btn-sidentifier" type="submit">S'identifier</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>



    </div>

</div>

@endsection