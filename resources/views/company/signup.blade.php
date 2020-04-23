@extends('layout.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('./style/signupCompany.css')}}">
    <title>Document</title>
</head>
<body>
    @section('nav')
    <header> </header>
    <section class="section-form">
        <div></div>
        <form action="{{action('CreateCompany@newCompany')}}" method="POST" class="search-form">
            @csrf
            <header class="header">Create an company account</header>
            <p class="sub-header"></p>
            <div class="">
                <label for=""> Owner Name</label>
                <input type="text" name="owner_name" placeholder="Enter your name">
                @error('owner_name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="">
                <label for=""> Company Name </label>
                <input type="text" name="company_name" placeholder="Enter your hotel name">
                @error('company_name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
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
                    <a href="{{url('/signin')}}">already have an account !!</a>
                </div>
                <div class="form-button">
                    <input type="submit" value="Signup">
                </div>
            </div>
        </form>
        <div></div>
    </section>
    @endsection
</body>
</html>