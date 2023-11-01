@extends('layouts.guest')

@section('title', 'Reset-Password')

@section('content')

<!-- IMAGE CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 d-none d-md-block infinity-image-container"></div>
<!-- IMAGE CONTAINER END -->


<!-- FORM CONTAINER BEGIN -->
<div class="col-lg-6 col-md-6 infinity-form-container">
    <div class="col-lg-8 col-md-12 col-sm-8 col-xs-12 infinity-form">
        <div class="text-center mb-3 mt-5">
            <img src="{{ asset('assets\Auth\logo.png') }}" width="150px">
        </div>
        <div class="reset-form d-block">
            <form class="reset-password-form px-3" method="POST" action="{{ route('password.store') }}">
                @csrf
                <h4 class="mb-3">Reset Your password</h4>
                {{-- <p class="mb-3 text-white">
                    Please enter your email address and we will send you a password reset link.
                </p> --}}
                {{-- <input type="hidden" name="token" value="{{ $request->route('token') }}"> --}}
                <div class="form-input">
                    <span><i class="fa fa-envelope"></i></span>
                    <input id="email" type="email" name="email" :value="old('email', $request->email)" required
                        autofocus autocomplete="username" tabindex="10">
                </div>
                <div class="form-input">
                    <span><i class="fa fa-lock"></i></span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="New Password" required id="password" name="password" autocomplete="new-password">
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
                        placeholder="Confirm Password" required id="password_confirmation" name="password" autocomplete="new-password">
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn">Reset Password</button>
                </div>
            </form>
        </div>

        {{-- <div class="reset-confirmation d-none px-3">
            <div class="mb-4">
                <h4 class="mb-3">Link was sent</h4>
                <h6 class="text-white">Please, check your inbox for a password reset link.</h6>
            </div>

            <a href="login.html">
                <button type="submit" class="btn">Login Now</button>
            </a>
            <div>
            </div>
        </div> --}}
        <!-- FORM CONTAINER END -->
    </div>
</div>

@endsection
