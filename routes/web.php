<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home Routes

Route::get('/','Home@viweHome')->name('home');









// Verify Email Routes
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

    //---------------- guest can visit this page ------------------//
Route::group(['middleware' => 'guest'], function () {
    // Login User
    Route::post('/signin','Signin@authenticate')->name('authenticate');
    Route::get('/signin','Signin@loginPage')->name('login');

    // Create Users Routes
    Route::get('/signup','Signup@signupPage')->name('signup');
    Route::post('/signup','Signup@createUser')->name('createUser');
    
});
    //---------------- User can visit this page ------------------//
    Route::group(['middleware' => 'verified'], function () {
    //logout Routes
    Route::get('/logout', 'LogoutController@logout');


    // Dashboard Routes
    Route::get('/dashboard','dashboardPage@showPage')->name('dashboard');
});

 //-------------------- Start Company URL --------------------//

    //-------------------- Start Rigester -------------------//
    Route::get('/company/signup' , 'CreateCompany@signup')->name('companyRegister');
    Route::post('/company/signup' , 'CreateCompany@newCompany')->name('createCompany');


    //-------------------- Start Login -------------------//
    
    Route::get('/company/signin' , 'CreateCompany@signin')->name('authenticateCompany');
    Route::post('/company/signin' , 'CreateCompany@companyLogin')->name('companyLogin');