@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/popularseriesandtvs.css')}}">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <h1>Séries populaires</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>
    </div>
    <div class="row justify-content-center row-container-tvs-or-movies">
        @for($i=0; $i<18; $i++)
            <div class="tv-or-movie-item col-2 justify-content-center">
                <div class="btn-group d-block justify-content-end">
                    <button type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="plus-button"><span>+</span></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">+ Déjà vu</a>
                        <a class="dropdown-item" href="{{route('add_en_ce_moment_tv', ['id_show'=>$datas->results[$i]->id,'name'=>$datas->results[$i]->name])}}">+ En ce moment</a>
                        <a class="dropdown-item" href="#">+ A regarder plus tard</a>
                        <a class="dropdown-item" href="#">Recommander à un ami</a>
                        <a href="{{route('tv', ['id'=>$datas->results[$i]->id])}}" class=" dropdown-item plus-d-infos-link">Voir plus d'infos</a>
                    </div>
                </div>
                <img class="img-fluid" src="https://image.tmdb.org/t/p/w500/{{$datas->results[$i]->backdrop_path}}" alt="">
                <h2 class="text-center">{{$datas->results[$i]->name}}</h2>
            </div>

        @endfor
    </div>
</div>

@endsection