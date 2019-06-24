@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/searchResult.css')}}">
    <link rel="stylesheet" href="{{asset('css/progressCircle.css')}}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-around">
            @for($i=0; $i<=2; $i++)
                <div class="flex-column col-md-3 background-dark-opactiy show-tv-item justify-content-center">
                    @if($search_option == 'tv')
                    <img class="img-fluid" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->results[$i]->poster_path}}" alt="poster série {{$datas->results[$i]->name}}">
                    <h1 class="text-center name">{{$datas->results[$i]->name}}</h1>
                        @else
                        <img class="img-fluid" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->results[$i]->poster_path}}" alt="poster série {{$datas->results[$i]->title}}">
                        <h1 class="text-center name">{{$datas->results[$i]->title}}</h1>
                    @endif
                    <div class="row justify-content-center">
                        <div class="counter" data-cp-percentage="{{($datas->results[$i]->vote_average)*10}}" data-cp-color="#e50914">
                        </div>
                        <div class="btn-group ">
                            <button type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="plus-button"><span>+</span></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">+ Déjà vu</a>
                                <a class="dropdown-item" href="#">+ En ce moment</a>
                                <a class="dropdown-item" href="#">Recommander à un ami</a>
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <a href="#" class="plus-d-infos-link">Voir plus d'infos</a>
                    </div>

                </div>
            @endfor
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/progressCircle.js')}}"></script>
@endsection