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
    public function profile(){
        $user = Auth::user();
        $encemoment = $user->enCeMoment;
        //dd($encemoment);

        $UserShowsController= new UserShowsController();

        $serie_du_moment = $UserShowsController->searchByID($encemoment);
        return view ('dtn.profile', compact('user', 'serie_du_moment'));
    }

/*    public function convertDBuserToUserClass($userDB){
        $userClass = new User();
        $userClass->pseudo = $userDB->pseudo;
        $userClass->email = $userDB->email;
        $userClass->id_serie_of_the_moment = $userDB->id_serie_of_the_moment;

        return $userClass;
    }*/

}
