<?php

namespace App\Http\Controllers\dtn;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    //
    public function register(){
        return view('auth.register');
    }
}
