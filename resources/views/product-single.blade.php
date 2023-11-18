@extends('layouts.app')

@section('title', 'Product View')

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
@slot('homeUrl', '/shop')
@slot('homeText', 'Shop')
@slot('pageName', 'Products View')
@slot('pageTitle', 'Products View')
@endcomponent

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/product-1.jpg" class="image-popup"><img src="images/product-1.jpg" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{ $product->name }}</h3>
                <p class="price"><span>Rp. {{ $product->price }}</span></p>
                <p>{{ $product->description }}</p>
                <div class="row mt-4">
                    <div class="w-100"></div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">{{ ($product->stock * $product->weight) / 1000 }} kg tersedia</p>
                    </div>
                </div>
                <p><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-black py-3 px-5">Add to Cart</a></p>
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

<script>
    $(document).ready(function () {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function (e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);


            // Increment

        });

        $('.quantity-left-minus').click(function (e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

    });

</script>
@endsection
