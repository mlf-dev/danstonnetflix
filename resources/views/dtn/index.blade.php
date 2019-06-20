@extends('dtn')
@section('content')

<div id="div-background">
    <span id="span-dark-background"></span>
    <img class="img-background" src="{{asset('img/background_home.jpg')}}" alt="image-background">
</div>


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

        <div id="home-text-left" class="col-4 offset-md-2">

            <p class="align-bottom">Envie de partager ce que vous regardez sur Netflix sans passer des heures à chercher le nom d'une série ? N'hésitez plus et inscrivez-vous ! Avec Dans ton Netflix, ajoutez progressivement vos séries et partagez les avec votre entourage en un clic !</p>
        </div>

        <div class="col-4">

            <h1>S'identifier</h1>

            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control input-log" placeholder="Email">
                    <input type="password" class="form-control input-log" placeholder="Mot de passe">
                    <button class="btn btn-sidentifier" type="submit">S'identifier</button>
                </div>
            </form>

        </div>

    </div>

</div>

@endsection