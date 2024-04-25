<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking CSS -->
    <link rel="stylesheet" href="auth/login-style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Main Title Icon -->

    <link rel="icon" type="image/gif/png" href="./images/Main Tab Image-Logo.png"> 
    <title>Responsive Login Slider</title>
</head>

<body>
    <div class="containter">
        <div class="formBx">
            <!------------ Slider ------------->
            <div class="form signinForm">
                <!-- Sign In Form -->
       
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="company"style="text-align: center;">
                        <i class='bx bx-log-in signinimage'></i>
                        <h3>Company Name</h3>

                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input type="submit" value="Login">
                    <a href="#" class="forgot">Forgot Password?</a>
                </form>
            </div>
           
        </div>
    </div>
   
</body>

</html>