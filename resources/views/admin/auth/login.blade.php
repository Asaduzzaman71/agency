@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="auth-fluid" style="background: url({{asset('admin/images/soft-pro-it.jpg')}})">

    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="index.html" class="logo-dark">
                        <span><img src="{{asset('admin/images/softproit.png')}}" alt="" style="height:34px"></span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span><img src="{{asset('admin/images/softproit.png')}}" alt="" height="18"></span>
                    </a>
                </div>

                <!-- title-->
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form method="post" action="{{ route('login') }}">
                    @csrf                   
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input class="form-control" type="email" name="email" required="" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        {{-- <a href="{{ route('user-password.update') }}" class="text-muted float-end"><small>Forgot your password?</small></a> --}}
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember_token">
                            <label class="form-check-label" for="remember_token">Remember me</label>
                        </div>
                    </div>
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="error  mb-5" style="color:rgb(255, 0, 0)">{{$error}}</div>
                        @endforeach
                    @endif
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                    </div>                    
                </form>

                <footer class="footer footer-alt">
                    <p class="text-muted">Haven't an account? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Register</b></a></p>
                </footer>

            </div> 
        </div>
    </div>
 
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">WE LOVE SOFT PRO IT</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> STANDS FOR NEW ERA <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>
                -- DDP Admin User --
            </p>
        </div>
    </div>   
</div>
@endsection
