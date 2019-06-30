<?php

namespace App\Http\Controllers\dtn;

use App\Show;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    public function profile(Request $request){
        $user = User::where('id','=',strval($request->id))->first();
        // dd($user);
        $encemoment = $user->enCeMoment;
        $dejavu = $user->viewedShows()->latest()->first();
        //dd($encemoment);
        //dd($dejavu);
        $UserShowsController= new UserShowsController();

        // dd($user->enCeMoment);
        if ($user->enCeMoment == null){
            $serie_du_moment = null;
        } else {
            // on récupère les données dans la DB de tmdb
            $serie_du_moment = $UserShowsController->searchByID($encemoment);
        }

        if ($user->viewedShows()->latest()->first() == null){
            $show_deja_vu = null;
        } else {
            // on récupère les données dans la DB de tmdb
            $show_deja_vu = $UserShowsController->searchByID($dejavu);
            // dd($show_deja_vu);
        }

        return view ('dtn.profile', compact('user', 'serie_du_moment', 'show_deja_vu'));
    }

    public function friends(){

        $user=User::find(Auth::user()->id);
        $user_friends = $user->userlinks()->get();
        // dd($user_friends);

        return view('dtn.friends', compact('user_friends'));
    }

    public function notifications(){
//        foreach(Auth::user()->unreadNotifications as $notification){
//           var_dump($notification->data['description']);
//        }
        return view('dtn.notifications');
    }

    public function dejaVu(){

        $viewed_shows = Auth::user()->viewedShows();

        dd($viewed_shows);

        return view('dtn.dejaVu');
    }
}
