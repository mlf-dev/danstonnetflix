<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewedShow extends Model
{
    //
    public function status(){
        return $this->belongsTo('App\ViewedStatus', 'id_viewed_status');
    }
}
