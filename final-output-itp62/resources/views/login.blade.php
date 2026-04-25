<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Instrument+Sans' rel='stylesheet'>
</head>

<body>

    <h1 class="login-title">kanlungan.</h1>

    <button class="login_button" id="login_button" type="button">Log In</button>
    <button class="signin_button" id="signin_button" type="button">Sign In</button>

    <img class="login-img" src="{{asset('images/Gemini_Generated_Image_3hf23p3hf23p3hf2.png')}}" alt="login-img">

    <div class="login" id="login">
        <form method="POST" action="/login">
            @csrf
            <label for="email">Email</label> <br>
            <input type="email" placeholder="Enter Email" name="email" id="email" required> <br>
            <p id="emailError" class="validation"></p>

            <label for="password">Password</label> <br>
            <input type="password" placeholder="Enter Password" name="password" id="password" required> <br>
            <p id="password_Error" class="validation"></p>

            @if(session('error'))
                <label id="loginLabel">{{session('error')}}</label>
            @endif

            <input class="loginbutton" id="loginbutton" type="submit" value="Log In">
        </form>
    </div>

    <div class="sign-in" id="sign-in">
        <form method="POST" action="/register" id="signinform">
            @csrf
            <label for="name">Name</label> <br>
            <input type="text" placeholder="Enter Name" name="name" class="name_detail" id="signin_nameDetail" required> <br>
            <p id="nameError" class="validation"></p>
            
            <label for="email">Email</label> <br>
            <input type="email" placeholder="Enter Email" name="email" id="signin_email" required> <br>
            <p id="signin-emailError" class="validation"></p>

            <label for="password">Password</label> <br>
            <input type="password" placeholder="Enter Password" name="password" id="signin_password" required> <br>
            <p id="signin-passwordError" class="validation"></p>

            @if(session('success'))
                <label id="signinLabel">{{session('success')}}</label>
                <script>window.showSigninAfterRegister = true;</script>
            @elseif(session('emailError'))
                <label id="signinLabel">{{session('emailError')}}</label>
                <script>window.showSigninAfterRegister = true;</script>
            @endif

            <input class="loginbutton" type="submit" value="Sign In">
        </form>
    </div>

    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>
