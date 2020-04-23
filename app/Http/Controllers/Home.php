<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    // home page function
    public function viweHome(){
        return view('home');
    }
}
