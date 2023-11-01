@extends('layouts.guest')

@section('title', 'Forgot-Password')

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
            <form class="reset-password-form px-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <p class="mb-3 text-white">
                    Forgot your password? No problem. Just let us know your email address and we will email you a
                    password reset link that will allow you to choose a new one.
                </p>
                
                @if (session('status'))
                <p style="color: rgb(59, 59, 248); font-weight: bold;">Tautan reset sandi baru telah dikirim ke alamat email yang Anda berikan saat pendaftaran.</p>
                @endif
               
                <div class="form-input">
                    <span><i class="fa fa-envelope"></i></span>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        placeholder="Email Address" id="email" tabindex="10" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn">Email Password Reset Link</button>
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
