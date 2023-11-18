@extends('layouts.guest')

@section('title', 'Register')

@section('content')

<!-- IMAGE CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
<!-- IMAGE CONTAINER END -->

<!-- FORM CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 infinity-form-container">
    <div class="col-lg-9 col-md-12 col-sm-8 col-xs-12 infinity-form">
        <!-- Company Logo -->
        <div class="text-center mb-3 mt-5">
            <img src="{{ asset('assets\Auth\logo.png') }}" width="150px">
        </div>
        <div class="text-center mb-4">
            <h4>Create an account</h4>
        </div>
        <!-- Form -->
        <form class="px-3" method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Input Box -->
            <div class="form-input">
                <span><i class="fa fa-user-o "></i></span>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username"
                    required id="name" name="name" value="{{ old('name') }}" tabindex="10">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-input">
                <span><i class="fa fa-envelope-o"></i></span>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required
                    id="email" name="email" value="{{ old('email') }}" tabindex="10">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-input">
                <span><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" required id="password" name="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-input">
                <span><i class="fa fa-lock"></i></span>
                <input type="password"
                    class="form-control @error('password_confirmation') is-invalid @enderror"
                    placeholder="Confirm Password" required id="password_confirmation" name="password_confirmation">
                @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <!-- Register Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-block">Register</button>
            </div>
            <div class="text-center mb-2">
                <div class="text-center mb-2 text-white">or register with</div>
                <!-- Facebook Button -->
                <a href="/auth/facebook/redirect" class="btn btn-social btn-facebook">facebook</a>

                <!-- Google Button -->
                <a href="/auth/google/redirect" class="btn btn-social btn-google">google</a>

                {{-- <!-- Twitter Button -->
                <a href="" class="btn btn-social btn-twitter">twitter</a> --}}
            </div>
            <div class="text-center mb-5 text-white">Already have an account?
                <a class="login-link" href="{{ route('login') }}">Login here</a>
            </div>
        </form>
    </div>
</div>
<!-- FORM CONTAINER END -->

@endsection
