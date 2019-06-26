<?php

namespace App\Http\Controllers\dtn;

use App\Show;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserShowsController extends Controller
{
    //
    public function addEnCeMoment_movie(Request $request){
        // Création de l'entité
        $show= new Show();
        // Hydratation
        $show->id_tmdb = $request->id_show;
        $show->isMovie = true;
        $show->save();

        $this->addEnCeMoment($request);

        return redirect()->route('pop_movies');
    }

    public function addEnCeMoment_tv(Request $request){
        // Création de l'entité
        $show= new Show();
        // Hydratation
        $show->id_tmdb = $request->id_show;
        $show->isMovie = false;
        $show->save();

        $this->addEnCeMoment($request);

        return redirect()->route('pop_tvs');
    }

    private function addEnCeMoment(Request $request){
        $showSavedInDB = DB::table('shows')->where('id_tmdb', '=',$request->id_show)->first();
        // dd($showSavedInDB->id);

        $user = User::find(Auth::user()->id);
        //dd($user);
        $user->id_serie_of_the_moment = $showSavedInDB->id;
        $user->save();

        $showname = $request->name;

        flash("Vous regardez en ce moment : ".$showname.".")->success();
        //return view('dtn.movies', ['message'=>$message]);
    }

    public function searchByID ($show){
        if ($show->isMovie){
            $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/'.$show->id_tmdb.'?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr'));
            // dd($datas);
            return $datas;
        } else {
            $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/tv/'.$show->id_tmdb.'?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr
'));
            // dd($datas);
            return $datas;
        }
    }
}
