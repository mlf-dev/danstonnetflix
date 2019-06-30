<?php

namespace App\Http\Controllers\dtn;

use App\Recommendation;
use App\RecommendationStatut;
use App\Show;
use App\User;
use App\ViewedShow;
use App\ViewedStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserShowsController extends Controller
{
    //
    private function newTvInDB($request){
        // Création d'un nouveau show pour la DB
        $show= new Show();
        // Hydratation
        $show->id_tmdb = $request->id_tmdb;
        $show->isMovie = false;
        $show->save();
    }

    private function newMovieInDB($request){
        // Création d'un nouveau show pour la DB
        $show= new Show();
        // Hydratation
        $show->id_tmdb = $request->id_tmdb;
        $show->isMovie = true;
        $show->save();
    }

    public function addEnCeMoment_movie(Request $request){
        // dd(Show::where('id_tmdb','=',$request->id_tmdb)->first()->id) ;
        // Création de l'entité
        if (!Show::where('id_tmdb','=',$request->id_tmdb)->first()) {
            $this->newMovieInDB(($request));

            $this->addEnCeMoment($request);
        } else {
            $this->addEnCeMoment($request);
        }

        return redirect()->back();
    }

    public function addEnCeMoment_tv(Request $request){

        // dd(Show::where('id_tmdb','=',$request->id_tmdb)->first()->id) ;
        // Création de l'entité
        if (!Show::where('id_tmdb','=',$request->id_tmdb)->first()) {
            $this->newTvInDB(($request));

            $this->addEnCeMoment($request);
        } else {
            $this->addEnCeMoment($request);
        }

        return redirect()->back();
    }

    private function addEnCeMoment(Request $request){
        $showSavedInDB = DB::table('shows')->where('id_tmdb', '=',$request->id_tmdb)->first();
        // dd($showSavedInDB->id);
        // dd($request->name);

        $user = User::find(Auth::user()->id);
        //dd($user);
        $user->id_serie_of_the_moment = $showSavedInDB->id;
        $user->save();

        $showname = $request->name;

        flash("Vous regardez en ce moment : ".$showname.".")->success();
        return redirect()->back();
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

    public function addDejaVu(Request $request){


        // dd($request);
        // Récupération du statut dans la base de données
        if ($request->status == "terminé"){
            $status = ViewedStatus::where('name','=','Terminé')->first();
            // dd($status_finish->id);
        } elseif ($request->status == "attente") {
            $status = ViewedStatus::where('name','=','En attente')->first();
            // dd($status_finish->id);
        } elseif ($request->status == "abandonné") {
            $status = ViewedStatus::where('name','=','Abandonné')->first();
            // dd($status->id);
        }

        // Si le show n'existe pas déjà dans la DB on le créé et on l'injecte dans la DB avant de l'utiliser
        if (!Show::where('id_tmdb','=',$request->id_tmdb)->first()){
            if ($request->searchOption == 'tv'){
                $this->newTvInDB($request);
            } else {
                $this->newMovieInDB($request);
            }

        }

        // Récupération du show dans la DB :
        $show = Show::where('id_tmdb','=',$request->id_tmdb)->first();
        // dd($show);

        // Récupération de l'id du user :
        $user_id = Auth::user()->id;

        // Création d'un nouveau ViewedShow :
        $viewedShow = new ViewedShow();
        $viewedShow->id_user = $user_id;
        $viewedShow->id_viewed_status = $status->id;
        $viewedShow->id_show = $show->id;
        // Pas de commentaire pour l'instant, à prévoir pour future fonctionnalité
        //dd($viewedShow);
        // Sauvegarde dans la DB :
        $viewedShow->save();

        // on récupère le titre du show
        $showname = $request->name;

        // message flash de confirmation succès de l'ajout
        flash("Vous avez ajouté ".$showname." à votre liste \"Déjà vu\".")->success();

        return redirect()->back();
    }

    public function recommend(Request $request){
        $user_who_recommends = Auth::user()->id;
        $user_who_is_recommended = $request->id_user;

        $comment = $request->input('comment');
        $show_id = $request->id_tmdb;

        if(!Show::where('id_tmbd','=',$show_id)->first()){
            if ($search_option == 'movie'){
                $this->newTvInDB($request);
            } else{
                $this->newMovieInDB($request);
            }
        }

        $recommendation = new Recommendation();
        $recommendation->id_user_who_recommends = $user_who_recommends;
        $recommendation->id_user_who_is_recommended = strval($user_who_is_recommended);
        $recommendation->id_show = Show::where('id_tmbd','=',$show_id)->first()->id;
        $recommendation->is_movie = Show::where('id_tmbd','=',$show_id)->first()->isMovie;
        $recommendation->id_recommendation_status = RecommendationStatut::where('name','=','En Attente')->first()->id;

        $showname = $request->name;

        flash('Vous avez recommandé '.$showname.' avec succès')->success();
        return redirect()->back();
    }

}
