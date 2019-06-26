@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                        <div class="row justify-content-between">
                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <h5>En ce moment :</h5>
                                </div>
                                <div class="row justify-content-center">
                                    <div>
                                        @if($user->id_serie_of_the_moment)

                                            <img src="https://image.tmdb.org/t/p/w300/{{$serie_du_moment->backdrop_path}}" alt="image {{$serie_du_moment->name}}">

                                            <h6 class="mt-2 show-name">{{$serie_du_moment->name}}</h6>

                                        @else

                                            <p class="p-no-data">Rien à regarder en ce moment, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>

                                        @endif
                                    </div>

                                </div>
                            </div> {{--fin col-3--}}

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <h5>Recommandé :</h5>
                                </div>
                                <div class="row justify-content-center">
                                    @if($user->id_serie_of_the_moment)
                                    @else
                                        <p class="p-no-data">Aucune recommandation pour l'instant, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                                    @endif
                                </div>
                            </div>{{--fin col-3--}}

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <h5>A regarder plus tard :</h5>
                                </div>
                                <div class="row justify-content-center">
                                    @if($user->id_serie_of_the_moment)
                                    @else
                                        <p class="p-no-data">Rien à regarder plus tard, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                                    @endif
                                </div>
                            </div>{{--fin col-3--}}

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <h5>Déjà visionné :</h5>
                                </div>
                                <div class="row justify-content-center">
                                    @if($user->id_serie_of_the_moment)
                                    @else
                                        <p class="p-no-data">Vous n'avez rien visionné pour l'instant, <a class="link-search" href="{{route('index')}}">cliquez ici</a> pour faire une recherche.</p>
                                    @endif
                                </div>
                            </div>{{--fin col-3--}}


                        </div>{{--fin row--}}


                    </div>{{--fin container--}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
