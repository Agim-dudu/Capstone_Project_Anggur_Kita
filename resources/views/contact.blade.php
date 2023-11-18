@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!-- Header -->
@include('layouts.header')
<!-- END Header -->

<!-- nav -->
@include('layouts.navigation')
<!-- END nav -->

<!-- Reusable Hero BG -->
@component('components.hero-bg')
@slot('backgroundImageUrl', 'http://127.0.0.1:8000/assets/images/bg-cart.jpg')
@slot('homeUrl', '/')
@slot('homeText', 'Home')
@slot('pageName', 'Contact us')
@slot('pageTitle', 'Contact us')
@endcomponent

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Address:</span>{{ $perusahaans->first()->address }}</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Phone:</span> <a href="">{{ $perusahaans->first()->phone }}</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="">{{ $perusahaans->first()->email }}</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Website</span> <a href="">{{ $perusahaans->first()->url }}</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="{{ route('contact.send') }}" method="POST" class="bg-white p-5 contact-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            
            </div>

            <div class="col-md-6 d-flex">
                <div class="bg-white">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127442.71332876346!2d115.8611865884884!3d-3.4506571794902947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de8b14da10de21d%3A0xa4d0fcf5dcb9305e!2sKec.%20Batulicin%2C%20Kabupaten%20Tanah%20Bumbu%2C%20Kalimantan%20Selatan!5e0!3m2!1sid!2sid!4v1699594268056!5m2!1sid!2sid" width="500" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
@include('layouts.footer')
<!-- END Footer -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" /></svg></div>

@endsection
