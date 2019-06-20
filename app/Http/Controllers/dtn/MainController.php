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
        $tv_show_name = $request->input('search_tv_show');

        // envoie requête avec intégration de ce qui a été tapé par le user dans le paramètre "query", qu'on stocke dans une variable
        $datas = $result = json_decode(file_get_contents('https://api.themoviedb.org/3/search/tv?api_key=0f78a5a808b71acf355a601def5da6b4&language=fr&query='.$tv_show_name.'&page=1'));

        // dd($datas->results);

        // retourner la vue avec les données récupérées
        return view('dtn.searchResult', ['datas' => $datas]);


    }
}
