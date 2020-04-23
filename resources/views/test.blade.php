<section>
    <header>Create a New Account</header>
    <form action="{{action('Signup@createUser')}}" method="POST" class="main-form">
        @csrf
        <label for="">FirstName
            <input type="text" name="fr-name" placeholder="Enter your first_Name">
            @error('fr-name')
                <div class="alert alert-danger" >{{$message}}</div>
            @enderror 
        </label>
        <br/>
        <label for="">Lastname
            <input type="text" name="la-name" placeholder="Enter your last_name">
            @error('la-name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </label>
        <br/>
        <label for="">Email
            <input type="email" name="email" placeholder="Enter your email">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </label>
        <br/>
        <label for="">Password
            <input type="password" name="password" placeholder="Enter your password">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </label>
        <br/>
        <label for="" class="button">
            <span class="span">
                <input type="submit" value="Submit">
            <a href="{{url('/signin')}}">already have an account !!</a>
            </span>
        </label>
        
    </form>
</section>