<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLinks extends Model
{
    //
    protected $fillable = [
        'confirmed'
    ];

    public function setConfirmed(Bool $set){
        $this->confirmed = $set;
    }

    public function users(){
        $this->belongsToMany('App\Userlinks');
    }
}
