@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/tv.css')}}">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-10 offset-md-1 div-container-item">

                <div id="div-background">
                    <img src="https://image.tmdb.org/t/p/original/{{$datas->backdrop_path}}" class="img-fluid" id="background-backdrop-path" alt="background {{$datas->name}}">
                </div>

                <div class="content">
                    {{$datas->name}}
                    {{($datas->vote_average)*10}}
                    {{$datas->overview}}
                    <img id="poster-item" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->poster_path}}" alt="poster {{$datas->name}}">
                </div>


            </div>
        </div>
    </div>
@endsection