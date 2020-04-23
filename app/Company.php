<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Company extends Authenticatable implements MustVerifyEmail
{
    //
    use Notifiable;
    protected $fillable = ['owner_name' , 'company_name' , 'email', 'password'];
}
