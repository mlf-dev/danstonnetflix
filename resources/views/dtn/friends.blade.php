@extends('dtn')

@section('css')
    <link rel="stylesheet" href="{{asset('css/friends.css')}}">
    <link rel="stylesheet" href="{{asset('css/userSearch.css')}}">
@endsection

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-around">
        @foreach($user_friends as $friend)
                <div class="col-4 background-dark-opactiy friend">
                    <div class="row justify-content-center">
                    {{strtoupper($friend->pseudo)}}
                    </div>
                    <div class="row justify-content-center">
                        <img src="{{asset('img/profile_image_default.png')}}" alt="profile img">
                    </div>
                </div>
        @endforeach
        </div>
    </div>

@endsection