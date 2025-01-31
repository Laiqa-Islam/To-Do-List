@extends('layout')

@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container1">
            <div class="signup-content mt-5">
                <div class="signup-form">
                    <h2 class="form-title text-black">Sign up</h2>
                    <form method="POST" action="/register" class="register-form" id="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" />
                            @error('name')
                                <p class="text-light">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" />
                            @error('email')
                                <p class="text-light">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="pass" placeholder="Password" />
                            @error('password')
                                <p class="text-light">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="re_pass"
                                placeholder="Confirm password" />
                            @error('password_confirmation')
                                <p class="text-light">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="form-group form-button">
                            <button class="btn btn-info btn-lg px-4 me-sm-3 fw-bold">Register</button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{ asset('images/signup-image.jpg') }}" alt="sing up image"></figure>
                    <span>Already a member? <a href="/login" class="signup-image-link">Log in</a></span>
                </div>
            </div>
        </div>
    </section>
@endsection
