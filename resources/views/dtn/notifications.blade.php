@extends('dtn')


@section('content')
<div class="row justify-content-center">
    <div class="col-5">
        @include('flash::message')
    </div>
</div>


<div>
    @if(\Illuminate\Support\Facades\Auth::user()->unreadNotifications->isEmpty())
        <div class="alert alert-secondary" role="alert">
            Vous n'avez pas de nouvelle notification.
        </div>
    @endif

    @foreach(\Illuminate\Support\Facades\Auth::user()->unreadNotifications as $notification)
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="alert alert-info" role="alert">
                    <h5>{{$notification->data['description']}}</h5> <a href="">Voir son profil</a>
                </div>
            </div>
            @if($notification->type == 'App\Notifications\RequestToAddFriend')
                <div class="col-md-1 align-middle mt-3">
                    <a class="btn btn-primary" href="{{route('acceptFriend', ['notification'=>$notification])}}">Accepter</a>
                </div>
                <div class="col-md-1 align-middle mt-3">
                    <a class="btn btn-danger" href="{{route('denyFriend',['notification'=>$notification])}}">Refuser</a>
                </div>

            @endif
        </div>
    @endforeach
</div>

@endsection