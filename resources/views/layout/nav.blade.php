<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <a href="{{url('/company/signin')}}" class="nav-button">Signin</a>
    </nav>
    @yield('nav')
</body>
</html>