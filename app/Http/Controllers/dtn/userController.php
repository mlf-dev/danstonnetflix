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
        $user = Auth::user();
        $encemoment = $user->enCeMoment;
        //dd($encemoment);

        $UserShowsController= new UserShowsController();

        // dd($user->enCeMoment);
        if ($user->enCeMoment == null){
            $serie_du_moment = null;
        } else {
            $serie_du_moment = $UserShowsController->searchByID($encemoment);
        }

        return view ('dtn.profile', compact('user', 'serie_du_moment'));
    }

    public function friends(){
        return view('dtn.friends');
    }

}
