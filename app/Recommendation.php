<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    //
    public function status(){
        return $this->belongsTo('App\RecommendationStatut', 'id_recommendation_status');
    }

    public function userWhoRecommends(){
        return $this->belongsTo('App\User', 'id_user_who_recommends');
    }

    public function userWhoIsRecommended(){
        return $this->belongsTo('App\User','id_user_who_is_recommended');
    }

    public function show(){
        return $this->belongsTo('App\Show', 'id_show');
    }
}
