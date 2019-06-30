<div class="flex-column col-md-3 background-dark-opactiy show-tv-item justify-content-center">
    @if($search_option == 'tv')
        <img class="img-fluid" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->results[$i]->poster_path}}" alt="poster série {{$datas->results[$i]->name}}">
        <h1 class="text-center name">{{$datas->results[$i]->name}}</h1>
    @else
        <img class="img-fluid" src="https://image.tmdb.org/t/p/w300_and_h450_bestv2{{$datas->results[$i]->poster_path}}" alt="poster série {{$datas->results[$i]->title}}">
        <h1 class="text-center name">{{$datas->results[$i]->title}}</h1>
    @endif
    <div class="row justify-content-center">
        <div class="counter" data-cp-percentage="{{($datas->results[$i]->vote_average)*10}}" data-cp-color="#e50914">
        </div>
        <div class="btn-group ">
            <button type="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" class="plus-button"><span>+</span></button>
            <div class="dropdown-menu">
                <div class="dropdown-submenu">
                    <p class="dropdown-item">+ Déjà vu</p>
                    <div class="dropdown-menu">
                        @if($search_option == 'tv')
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'terminé','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->name, 'searchOption'=>$search_option])}}">-> Terminé</a>
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'abandonné','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->name, 'searchOption'=>$search_option])}}">-> Abandonné</a>
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'attente','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->name, 'searchOption'=>$search_option])}}">-> En attente</a>
                        @else
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'terminé','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->title, 'searchOption'=>$search_option])}}">-> Terminé</a>
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'abandonné','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->title, 'searchOption'=>$search_option])}}">-> Abandonné</a>
                            <a class="dropdown-item" href="{{route('add_deja_vu', ['status'=>'attente','id_tmdb'=>$datas->results[$i]->id, 'name'=>$datas->results[$i]->title, 'searchOption'=>$search_option])}}">-> En attente</a>
                        @endif
                    </div>
                </div>
                @if($search_option == 'tv')
                    <a class="dropdown-item" href="{{route('add_en_ce_moment_tv',['id_tmdb'=>$datas->results[$i]->id,'name'=>$datas->results[$i]->name])}}">+ En ce moment</a>
                @else
                    <a class="dropdown-item" href="{{route('add_en_ce_moment_movie',['id_tmdb'=>$datas->results[$i]->id,'name'=>$datas->results[$i]->title])}}">+ En ce moment</a>
                @endif
                <a class="dropdown-item" href="#">+ A regarder plus tard</a>
                <a class="dropdown-item" href="#">Recommander à un ami</a>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <a href="#" class="plus-d-infos-link">Voir plus d'infos</a>
    </div>

</div>