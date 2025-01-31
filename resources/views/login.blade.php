@extends('layout')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container1">
            <div class="signup-content mt-5 align-items-center">
                <div class="signin-image ">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <span class="text-black">Not a member? <a href="/register" class="signup-image-link">Create an account</a></span>
                    
                </div>

                <div class="signup-form">
                    <h2 class="form-title text-black">Sign In</h2>
                    <form method="POST" action="/login" class="register-form" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="your_name" placeholder="Your Email" />
                            @error('email')
                            <p class="text-danger">{{$message}}</p>                                    
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password" />
                            @error('password')
                            <p class="text-danger">{{$message}}</p>                                    
                        @enderror
                        </div>
                      
                        <div class="form-group form-button">
                            <button class="btn btn-info btn-lg px-4 me-sm-3 fw-bold">Login</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
@endsection
