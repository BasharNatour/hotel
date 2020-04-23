<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('./style/signup.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('./style/form.css')}}">
</head>

<body>
    <nav class="nav-bar">
        <div></div>
        <div class="ul-bar">
            <div>Home</div>
            <div>Facitities</div>
            <div>Contact Us</div>
            <div>Help</div>
        </div>
        <a href="{{url('/signin')}}" class="nav-button">Signin</a>
    </nav>
    <header> </header>
    <section class="section-form">
        <div></div>
        <form action="{{action('Signup@createUser')}}" method="POST" class="search-form">
            @csrf
            <header class="header">Create an account</header>
            <p class="sub-header"></p>
            <div class="">
                <label for=""> FirstName</label>
                <input type="text" name="fr-name" placeholder="Enter your first_Name">
                @error('fr-name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="">
                <label for=""> Lastname </label>
                <input type="text" name="la-name" placeholder="Enter your last_name">
                @error('la-name')
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
</body>

</html>
