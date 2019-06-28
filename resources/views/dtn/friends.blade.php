@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/friends.css')}}">
@endsection

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-around">
        @foreach($user_friends as $friend)
                <div class="col-4 background-dark-opactiy">
                    <div class="row justify-content-center">
                    {{strtoupper($friend->pseudo)}}
                    </div>
                    @if($friend->encemoment)
                    {{$friend->encemoment}}
                    @endif
                </div>
        @endforeach
        </div>
    </div>

@endsection