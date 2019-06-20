@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/searchResult.css')}}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-around">
            @for($i=0; $i<=2; $i++)
                <div class="flex-column col-md-3 background-dark-opactiy show-tv-item justify-content-center">
                    <img class="img-fluid" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->results[$i]->poster_path}}" alt="poster série {{$datas->results[$i]->name}}">
                    <h1 class="text-center">{{$datas->results[$i]->name}}</h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: {{($datas->results[$i]->vote_average)*10}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{($datas->results[$i]->vote_average)*10}}%</div>
                    </div>
                    <p>{{substr($datas->results[$i]->overview, 0, 200)}}@if(strlen($datas->results[$i]->overview))...@endif</p>
                </div>
            @endfor
        </div>
    </div>

@endsection