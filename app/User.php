<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pseudo', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function enCeMoment(){
        return $this->belongsTo('App\Show', 'id_serie_of_the_moment');
    }

    public function userLinks(){
        return $this->belongsToMany('App\User','user_links','current_user_id','second_user_id','id')->withPivot('current_user_id','second_user_id','confirmed');
    }

    public function viewedShows(){
        return $this->belongsToMany('App\Show','viewed_shows','id_user', 'id_show')->withPivot('comment','id_viewed_status');
    }

    public function showToWatch(){
        return $this->belongsToMany('App\Show','showToWatches')->withPivot('id_user_who_recommends');
    }

}
