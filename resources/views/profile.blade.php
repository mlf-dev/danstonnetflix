@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                        {{strtoupper(\Illuminate\Support\Facades\Auth::user()->pseudo)}}
                    </div>
                    <div class="row justify-content-center">
                        <img class="profile-image" src="{{asset('img/profile_image_default.png')}}" alt="image profile {{\Illuminate\Support\Facades\Auth::user()->pseudo}}"></div>
                    </div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <h5>En ce moment :</h5>
                        </div>
                        <div class="row">
                            @if(\Illuminate\Support\Facades\Auth::user()->id_serie_of_the_moment)
                            @else
                                <p class="p-no-data">Rien à regarder en ce moment, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                            @endif
                        </div>

                    </div>

                    <div class="container">
                        <div class="row">
                            <h5>Recommandé :</h5>
                        </div>
                        <div class="row">
                            @if(\Illuminate\Support\Facades\Auth::user()->id_serie_of_the_moment)
                            @else
                                <p class="p-no-data">Aucune recommandation pour l'instant, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                            @endif
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <h5>A regarder plus tard :</h5>
                        </div>
                        <div class="row">
                            @if(\Illuminate\Support\Facades\Auth::user()->id_serie_of_the_moment)
                            @else
                                <p class="p-no-data">Rien à regarder plus tard, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                            @endif
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <h5>Déjà visionné :</h5>
                        </div>
                        <div class="row">
                            @if(\Illuminate\Support\Facades\Auth::user()->id_serie_of_the_moment)
                            @else
                                <p class="p-no-data">Vous n'avez rien visionné pour l'instant, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
