@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/searchResult.css')}}">
    <link rel="stylesheet" href="{{asset('css/progressCircle.css')}}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @include('flash::message')
            </div>
        </div>
        <div class="row justify-content-around">
            @if((count($datas->results)) == 0)
                <div class="col-8">
                    <p>Aucun réssultat ne correspond à votre recherche.</p>
                </div>
            @elseif((count($datas->results)) == 1)
                @for($i=0; $i<1; $i++)
                    @include('layouts.search_result_item')
            @endfor
            @elseif((count($datas->results)) > 1 && (count($datas->results)) <=2)
                @for($i=0; $i<=1; $i++)
                    @include('layouts.search_result_item')
                @endfor
            @elseif((count($datas->results)) > 2)
                @for($i=0; $i<=2; $i++)
                    @include('layouts.search_result_item')
                @endfor
            @endif
        </div>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('js/progressCircle.js')}}"></script>
@endsection