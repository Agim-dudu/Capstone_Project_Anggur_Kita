@extends('layouts.guest')

@section('title', 'Login')

@section('content')

<!-- IMAGE CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
<!-- IMAGE CONTAINER END -->

<!-- FORM CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 infinity-form-container">
    <div class="col-lg-9 col-md-12 col-sm-9 col-xs-12 infinity-form">
        <!-- Company Logo -->
        <div class="text-center mb-3 mt-5">
            <img src="{{ asset('assets\Auth\logo.png') }}" width="150px">
        </div>
        <div class="text-center mb-4">
            <h4>Login into your account</h4>
        </div>
        <!-- Form -->
        <form class="px-3" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Input Box -->
            <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required id="email" name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-input">
                <span><i class="fa fa-lock" ></i></span>
                <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="Password" required>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <!-- Remember Checkbox -->
                <div class="col-auto d-flex align-items-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember_me" name="remember_me">
                        <label class="custom-control-label text-white" for="remember">Remember me</label>
                    </div>
                </div>
            </div>
            <!-- Login Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-block">Login</button>
            </div>
            <div class="text-right ">
                <a href="{{ route('password.request') }}" class="forget-link">Forgot password?</a>
            </div>
            <div class="text-center mb-2">
                <div class="text-center mb-2 text-white">or login with</div>

                <!-- Facebook Button -->
                <a href="" class="btn btn-social btn-facebook">facebook</a>

                <!-- Google Button -->
                <a href="" class="btn btn-social btn-google">google</a>

                <!-- Twitter Button -->
                <a href="" class="btn btn-social btn-twitter">twitter</a>
            </div>
            <div class="text-center mb-5 text-white">Don't have an account?
                <a class="register-link" href="{{ route('register') }}">Register here</a>
            </div>
        </form>
    </div>
</div>
<!-- FORM CONTAINER END -->

@endsection
