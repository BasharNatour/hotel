<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <a href="{{url('/signup')}}" class="nav-button">Signup</a>
    </nav>
    <header> </header>
    <section class="section-form">
        <div></div>
        <form action="{{action('Signin@authenticate')}}" method="POST" class="search-form">
            @csrf
            <header class="header" id="login">Login</header>
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
</body>

</html>



{{-- <section>
    <header> Login </header>
    <form action="{{action('Signin@authenticate')}}" method="POST" class="main-form">
@csrf
<label for="">Email
    <input type="email" name="email" placeholder="Enter your email">

</label>
<br />
<label for="">Password
    <input type="password" name="password" placeholder="Enter your password">

</label>
<br />
<label for="" class="button">
    <span class="span">
        <input type="submit" value="Submit">
        <a href="{{url('/signup')}}">Create an account!</a>
    </span>
</label>

</form>
</section> --}}
