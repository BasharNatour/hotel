@extends('layout.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('./style/signinCompany.css')}}">
</head>
<body>
    @section('nav')
    <header> </header>
    <section class="section-form">
        <div></div>
        <form action="{{action('Signin@authenticate')}}" method="POST" class="search-form">
            @csrf
            <header class="header" id="login">Login as compnay</header>
            <p class="sub-header"></p>
            <div class="">
                <label for=""> Email</label>
                <input type="email" name="email" placeholder="Enter your email">
                @error('email')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="geust">
                <label for=""> Password</label>
                <input type="password" name="password" placeholder="Enter your password">
                @error('password')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="form-button">
                <div class="span">
                    <a href="{{url('/signup')}}">Create an account!</a>
                </div>
                <div class="form-button">
                    <input type="submit" value="Signin">
                </div>
            </div>
        </form>
        <div></div>
    </section>
    @endsection
</body>
</html>