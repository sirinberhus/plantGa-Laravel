<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/signup</title>
    <link rel="stylesheet" href="/css/loginStyle.css">

    <!--Unicons-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>

    <!--Home-->

    <section class="home">
        
        <a href="/homepage"> <button class="go-back-button" id="go-back-button">
            <i class="fas fa-arrow-left"></i> Go Back
        </button></a>
      

        <div class="form-container" id="form-container">
            <!--login forms-->

            <div class="login_form">
                <form action="/login" method="POST" id="login-form">
                    @csrf
                    <h2>Login</h2>
                    <div class="input-box">
                        <input type="text" name="login_username" placeholder="Enter your username">
                        <i class="uil uil-user user"></i>
                    </div>

                    {{-- <div class="input-box">
                        <input type="email" name="email" placeholder="Enter your email">
                        <i class="uil uil-envelope-alt email"></i>
                    </div> --}}

                    <div class="input-box">
                        <input type="password" id="password" name="login_password" placeholder="Enter your password">
                        <i class="uil uil-lock-alt password" id="password-icon"></i>
                        <i class="uil uil-eye-slash password_hide" id="toggle-password"></i>
                    </div>

                    <div class="option-field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>

                    <button class="button">Login Now</button>

                    <div class="login-signup">
                        <span>Don't have an account?</span>
                        <a href="#" id="signup">Signup</a>
                    </div>

                </form>

            </div>

            <!--Signup forms-->

            <div class="signup-form">
                <form action="/signup" method="POST" id="signup-form">
                    @csrf
                    <h2>Signup</h2>
                    <div class="input-box">
                        <input type="text" value="{{old('username')}}" name="username" placeholder="Enter your username">
                        @error('username')
                        <p class="alert-danger">{{$message}}</p>
                        @enderror
                        <i class="uil uil-user user"></i>
                       
                    </div>

                    <div class="input-box">
                        <input type="email" value="{{old('email')}}" name="email" placeholder="Enter your email">
                        @error('email')
                        <p class="alert-danger">{{$message}}</p>
                        @enderror
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                  
                    <div class="input-box">
                        <input type="password" name="password" id="signup-password" placeholder="Create password">
                        @error('password')
                        <p class="alert-danger">{{$message}}</p>
                        @enderror
                        <i class="uil uil-lock-alt password" ></i>
                        <i class="uil uil-eye-slash password_hide" id="signup-toggle-password"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" name="password_confirmation" id="confirm-password" placeholder="Confirm password">
                        @error('password_confirmation')
                        <p class="alert-danger">{{$message}}</p>
                        @enderror
                        <i class="uil uil-lock-alt password" id="password-icon"></i>
                        <i class="uil uil-eye-slash password_hide" id="confirm-toggle-password"></i>
                    </div>

                    <div class="option-field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>

                    <button class="button">Signup Now</button>

                    <div class="login-signup">
                        <span>Already have an account?</span>
                        <a href="#" id="login">Login</a>
                    </div>

                </form>
            </div>

        </div>

    </section>

    <script src="/js/loginPage.js"></script>
</body>
</html>