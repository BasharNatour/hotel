<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class Signin extends Controller
{
    // Login user function
    public function authenticate(LoginRequest $request){
        
       
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->intended('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
    public function loginPage(){
        return view('signin');
    }
}
