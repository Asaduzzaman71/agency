@extends('layouts.auth')
@section('title', 'Register')

@section('content')
<div class="auth-fluid" style="background: url({{asset('admin/images/ddp/bg-auth.jpg')}})">

    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="{{ route('register') }}" class="logo-dark">
                        <span><img src="{{asset('admin/images/logo-ddp.png')}}" alt="" height="18"></span>
                    </a>
                    <a href="index.html" class="logo-light">
                        <span><img src="{{asset('assets/images/logo-ddp.png')}}" alt="" height="18"></span>
                    </a>
                </div>

                <!-- title-->
                <h4 class="mt-0">Register</h4>
                <p class="text-muted mb-4">Register an admin account.</p>

                <!-- form -->
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" name="name" required="" placeholder="Enter your name">
                    </div>
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
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" required="" name="password_confirmation" placeholder="Enter your password">
                    </div>
                   
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                    </div>
                    
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Have an account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Login</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
 
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
            </p>
            <p>
                -- DDP Admin User --
            </p>
        </div>
    </div>   
</div>
@endsection

@section('script')
<script src="{{asset('admin/js/vendor.min.js')}}"></script>
<script src="{{asset('admin/js/app.min.js')}}"></script>
@endsection
