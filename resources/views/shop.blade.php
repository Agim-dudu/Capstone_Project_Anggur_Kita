@extends('layouts.app')

@section('title', 'Shop')

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
@slot('pageName', 'Products')
@slot('pageTitle', 'Products')
@endcomponent

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="#" class="active">All</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Dried</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            @if (session('success'))
            <div class="col-md-12 mb-5 heading-section text-center ftco-animate ">
                <h4 style="color: rgb(119, 211, 43)">{{ session('success') }}</h4>
            </div>
            @elseif (session('warning'))
            <div class="col-md-12 mb-5 heading-section text-center ftco-animate ">
                <h4 style="color: rgb(221, 221, 60)">{{ session('warning') }}</h4>
            </div>
            @endif
            @foreach ($products as $product)
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product.show', ['id' => $product->id]) }}" class="img-prod">
                            <img class="img-fluid" src="{{ asset('assets/images/'.$product->image) }}" alt="Product Image">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="{{ route('product.show', ['id' => $product->id]) }}">{{ $product->name }}</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price">Rp. {{ $product->price }}</p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{ route('add_to_cart', $product->id) }}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-add"></i></span>
                                    </a>
                                    <a href="{{route('cart')}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <form id="wishlist-form-{{ $product->id }}" action="{{ route('wishlist.add.item') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                    </form>
                                    <a href="javascript:;" onclick="document.getElementById('wishlist-form-{{ $product->id }}').submit()" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
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
