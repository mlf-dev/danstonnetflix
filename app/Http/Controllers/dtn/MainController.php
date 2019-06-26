<?php

namespace App\Http\Controllers\dtn;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index(){
        return view('dtn.index');
    }

    public function search(Request $request){

        // récupération de ce qui a été tapé par le user dans l'input de recherche
        $search_query = $request->input('search');
        $search_option = $request->input('searchOption');

        // dd($search_query);
        if ($search_option == 'movie' || $search_option == 'tv'){

            // envoie requête avec intégration de ce qui a été tapé par le user dans le paramètre "query", qu'on stocke dans une variable
            $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/search/'.$search_option.'?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr&query='.$search_query.'&page=1'));

            // dd($datas->results);

            // retourner la vue avec les données récupérées
            return view('dtn.searchResult', ['datas' => $datas, 'search_option'=>$search_option]);

        } else {
            // $user = DB::table('users')->where('pseudo','=',$search_query)->first();
            // recherche du User
            $user = User::where('pseudo',$search_query)->first();
            // Nouveau controller pour utilier la fonction searchByID (récupérer les informations sur le show)
            $UserShowsController= new UserShowsController();
            // récupération des datas
            $serie_du_moment = $UserShowsController->searchByID($user->encemoment);
            // dd($serie_du_moment);
            // dd($user->enCeMoment);
            // Affichage de la vue avec passage des données
            return view('dtn.usersearch', compact('user', 'search_option', 'serie_du_moment'));
        }

    }

    public function popularMovies(){
        $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/popular?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr&page=1&region=france'));

        // dd($datas->results);

        return view('dtn.movies', ['datas' =>$datas]);
    }

    public function popularTvs(){
        $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/tv/popular?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr&page=1'));

        // dd($datas->results);

        return view('dtn.tvs', ['datas' =>$datas]);
    }

    public function tv(Request $request){
        // dd($request);
        $id_tv = $request->id;
        $datas= json_decode(file_get_contents('https://api.themoviedb.org/3/tv/'.$id_tv.'?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr'));
        // dd($datas);

        return view('dtn.tv', ['datas'=>$datas]);

    }
}
