<?php

namespace App\Http\Controllers\dtn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FriendsController extends Controller
{
    //
    public function addFriend(Request $request){
        $user1 = $request->user1;
        $user2 = $request->user2;
        echo 'min : '.min($user1,$user2).' ';
        echo 'max : '.max($user1,$user2).' ';


    }
}
