<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;  


class Signup extends Controller
{
    // Show signup page
    public function signupPage(){
        return view('signup');
    }

    // Create new user
    public function createUser(RegisterRequest $request){
        $request->merge(['password'=>bcrypt($request->input('password'))]);
        $newUser=User::create($request->all());
        event(new Registered($newUser));
            return redirect()->route('home');
    }

    // Verfiy Email
    public function verifyEmail(){
        return view('verify');
    }
}
