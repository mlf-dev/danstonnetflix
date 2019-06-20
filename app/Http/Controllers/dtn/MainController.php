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
}
