@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Header -->
@include('layouts.header')
<!-- END Header -->

<!-- nav -->
@include('layouts.navigation')
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('http://127.0.0.1:8000/assets/images/bg-cart.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
                <h1 class="mb-0 bread">About us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url();">
                <a href=""
                    class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Selamat Datang di Website Anggur Kita</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>Jelajahi kelezatan buah anggur premium kami, sebuah perjalanan yang membawa Anda jauh melampaui
                        kebun anggur biasa. Nikmati keragaman cita rasa yang sempurna.</p>
                    <p>Biarkan keindahan buah anggur kami mengajak Anda merasakan kelezatan alami. Tim kami yang
                        bersemangat menyambut Anda untuk menikmati kekayaan buah anggur terbaik, di mana setiap gigitan
                        menjadi pengalaman di kebun penuh warna dan rasa.</p>

                    <p><a href="#" class="btn btn-primary">Beli Sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter"
    style="background-image: url(http://127.0.0.1:8000/assets/images/bg3.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Penguna Web</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10">0</strong>
                                <span>Jenis Anggur</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="4">0</strong>
                                <span>Pengembang Web</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="10">0</strong>
                                <span>Pegawai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pengiriman Cepat</h3>
                        <span>Terjamin Dalam Pengiriman</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Selalu Segar</h3>
                        <span>Produk dikemas dengan baik</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Kualitas Unggul</h3>
                        <span>Kualitas Product</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Bantuan</h3>
                        <span>24/7</span>
                    </div>
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