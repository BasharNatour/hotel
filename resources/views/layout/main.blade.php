<!DOCTYPE html>
<html lang="en">
<body>
    @auth
        <nav class="nav-bar">
            <!-- <span class="logo">
                <img src="./img/logo.png" alt="This is logo">
            </span> -->
            <ul>
                <li><a href="{{url('/logout')}}">Logout</a></li>
                <li><a href="./signup">Booking Now</a></li>
                <li><a href="">About</a></li>
            </ul>
        </nav>
        @yield('content')
    </body>
    </html>
    @endauth
    @guest
        
    
        <nav class="nav-bar">
            <span class="logo">
                <img src="./img/logo.png" alt="This is logo">
            </span> 
             <ul>
                <li><a href="{{url('/logout')}}">Signin</a></li>
                <li><a href="./signup.html">Signup</a></li>
                <li><a href="">About</a></li>
            </ul>
        </nav> 
        @yield('content')
    </body>
    </html>
    @endguest
