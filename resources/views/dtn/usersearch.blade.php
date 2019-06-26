@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/searchResult.css')}}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-around">
            <div class="flex-column col-md-4 background-dark-opactiy show-tv-item justify-content-center">
                @if($user== null)
                    <p>Aucun utilisateur ne correspond à votre recherche.</p>
                @else
                    <div class="row justify-content-center">
                        <p>Voici le résultat de votre recherche :</p>
                    </div>
                    <div class="row justify-content-center">
                        {{strtoupper($user->pseudo)}}
                    </div>
                    <div class="row justify-content-center">
                        <img src="{{asset('img/profile_image_default.png')}}" alt="profile img">
                    </div>
                    <div class="row justify-content-center">
                        <h5>En ce moment : <a href="@if($user->enCeMoment->isMovie){{route('movie',['id'=>$serie_du_moment->id_tmdb])}} @else {{route('tv',['id'=>$user->enCeMoment->id_tmdb])}} @endif">{{$serie_du_moment->name}}</a></h5>
                    </div>
                    <div class="row justify-content-center">
                        <div class="btn-group mb-3">
                            <button type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="plus-button"><span>+</span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('profile',['id'=>$user->id])}}">Voir le profil</a>
                                <a class="dropdown-item" href="{{route('addfriend', ['user1'=>\Illuminate\Support\Facades\Auth::user()->id, 'user2'=>$user->id])}}">Ajouter à mes amis</a>
                            </div>
                        </div>
                    </div>

                @endif
            </div>
        </div>{{--fin row--}}
    </div>{{--fin container--}}

@endsection