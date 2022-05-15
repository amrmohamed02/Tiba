@extends('dashboard.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css/style1.css')}}">
</head>
<body>
    
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                                
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <h2 class="form-title">Edit your Profile</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"value="{{$user->name}}"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"value="{{$user->email}}"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"value="{{Request::Old('password')}}"/>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"value="{{Request::Old('password_confirmation')}}"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="terms" id="agree-term" class="agree-term" value="ok" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                      
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('images/signup-image.jpg')}}" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>

        

    </div>

    <!-- JS -->
    <script src="{{asset('js/jquery.min2.js')}}"></script>
    <script src="{{asset('js/reg.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection