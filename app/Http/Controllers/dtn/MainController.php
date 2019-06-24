<?php

namespace App\Http\Controllers\dtn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

        // envoie requête avec intégration de ce qui a été tapé par le user dans le paramètre "query", qu'on stocke dans une variable
        $datas = json_decode(file_get_contents('https://api.themoviedb.org/3/search/'.$search_option.'?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr&query='.$search_query.'&page=1'));

        // dd($datas->results);

        // retourner la vue avec les données récupérées
        return view('dtn.searchResult', ['datas' => $datas, 'search_option'=>$search_option]);
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
