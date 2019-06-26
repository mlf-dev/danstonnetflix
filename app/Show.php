<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    //
    public function enCeMoment(){
        return $this->hasMany('App\User');
    }
}
