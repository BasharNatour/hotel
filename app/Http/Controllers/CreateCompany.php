<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\CompanyLoginRequest;
use Illuminate\Auth\Events\Registered;


class CreateCompany extends Controller
{
    // start controller register
    public function signup(){
        return view('company.signup');
    }
    public function newCompany(CreateCompanyRequest $request){
        $request->merge(['password'=>bcrypt($request->input('password'))]);
        // dd($request->all());
        $newCompany =Company::create($request->all());
        event(new Registered($newCompany));
        return redirect()->route('companyLogin');
    }
    public function verifyEmail(){
        return view('verify');
    }


    // strart controller login
    public function signin(){
        return view('company.signin');
    }

    public function companyLogin(CompanyLoginRequest $request){
        if(Auth::attempt($request->only('email,password'))){
            return redirect()->intended('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
}
