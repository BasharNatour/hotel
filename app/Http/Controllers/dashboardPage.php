<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPage extends Controller
{
    // Dashboard function showPage
    public function showPage(){
        // dd(auth()->user());
        return view('dashboard');
    }
}
