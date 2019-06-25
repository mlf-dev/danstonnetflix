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
        return view ('profile', ['user'=>$user]);
    }

    public function addEnCeMoment_movie(Request $request){
        // Création de l'entité
        $show= new Show();
        // Hydratation
        $show->id_tmdb = $request->id_show;
        $show->isMovie = true;
        $show->save();

        $showSavedInDB = DB::table('shows')->where('id_tmdb', '=',$request->id_show)->first();
        // dd($showSavedInDB->id);

        $user = User::find(Auth::user()->id);
        //dd($user);
        $user->id_serie_of_the_moment = $showSavedInDB->id;
        $user->save();

        $showname = $request->name;

        flash("Vous regardez en ce moment : ".$showname.".")->success();
        //return view('dtn.movies', ['message'=>$message]);
        return redirect()->route('pop_movies');
    }
}
