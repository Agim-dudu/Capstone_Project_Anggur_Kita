@extends('layouts.app')

@section('title', 'Anggur Kita')

@section('content')


<!-- Header -->
@include('layouts.header')
<!-- END Header -->

<!-- nav -->
@include('layouts.navigation')
<!-- END nav -->

<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('http://127.0.0.1:8000/assets/images/bg-cart.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">We serve Fresh Fruits</h1>
                        <h2 class="subheading mb-4">We deliver organic fruits</h2>
                        <p><a href="{{route('shop')}}" class="btn btn-primary">Beli Sekarang</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('http://127.0.0.1:8000/assets/images/bg2.jpg');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">100% Fresh &amp; Organic Fruits</h1>
                        <h2 class="subheading mb-4">We deliver organic fruits</h2>
                        <p><a href="{{route('shop')}}" class="btn btn-primary">Beli Sekarang</a></p>
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

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                            style="background-image: url(http://127.0.0.1:8000/assets/images/landing-page/lp.jpg);">
                            <div class="text text-center">
                                <h2>Anggur</h2>
                                <p>Hidup Sehat Dengan Memakan Buah Segar dan Sehat</p>
                                <p><a href="#" class="btn btn-primary">Beli Sekarang</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                            style="background-image: url(http://127.0.0.1:8000/assets/images/landing-page/anggurtable.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Anggur Meja (Table Grapes)</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end"
                            style="background-image: url(http://127.0.0.1:8000/assets/images/landing-page/anggurblack.jpeg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Anggur Hitam (Black Grapes)</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                    style="background-image: url(http://127.0.0.1:8000/assets/images/landing-page/anggurmerah.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Anggur Merah (Red Grapes)</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end"
                    style="background-image: url(http://127.0.0.1:8000/assets/images/landing-page/anggurkismis.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Anggur Kismis (Raisin Grapes)</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Anggur Unggulan</span>
                <h2 class="mb-4">Anggur Kita</h2>
                <p>ditanam dengan menggunakan 100% pupuk organik tanpa pestisida dan bahan kimia.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if (session('success'))
            <div class="col-md-12 heading-section text-center ftco-animate green-background">
                <p>{{ session('success') }}</p>
            </div>
            @endif
            @foreach ($products as $product)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid"
                            src="{{ asset('assets/images/'.$product->image) }}" alt="Product Image">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $product->name }}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">Rp. {{ $product->price }}</p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{ route('add_to_cart', $product->id) }}"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-add"></i></span>
                                </a>
                                <a href="{{route('cart')}}"
                                    class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="ftco-section img" style="background-image: url(http://127.0.0.1:8000/assets/images/bg3.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Harga Terbaik Untuk Anda</span>
                <h2 class="mb-4">Untuk Kuliatas Anggur Terbaik Kami</h2>
                <p>yang ditanam dengan menggunakan 100% pupuk organik tanpa pestisida dan bahan kimia.</p>
                <h3><a href="#">Anggur Kita</a></h3>
                <span class="price">Tempat Pembelian Anggur Kulaitas Terbaik Termurah <a href="#">Beli Sekarang</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<!-- Footer -->
@include('layouts.footer')
<!-- END Footer -->


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" /></svg></div>


@endsection
