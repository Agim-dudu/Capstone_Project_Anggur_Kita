@extends('layouts.app')

@section('title', 'Your Wishlist')

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
@slot('pageName', 'Wishlist')
@slot('pageTitle', 'Wishlist')
@endcomponent

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>Product List</th>
                                <th>&nbsp;</th>
                                <th>Jenis</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlistProducts as $wishlist)
                                <tr class="text-center">
                                    <td class="product-remove">
                                        <form id="remove-wishlist-form-{{ $wishlist->product->id }}" action="{{ route('wishlist.remove.item') }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="product_id" value="{{ $wishlist->product->id }}">
                                        </form>
                                        <a href="javascript:;" onclick="document.getElementById('remove-wishlist-form-{{ $wishlist->product->id }}').submit()">
                                            <span class="ion-ios-close"></span>
                                        </a>
                                    </td>

                                    <td class="image-prod">
                                        <div class="img" style="background-image:url({{ asset('images/product-1.jpg') }});"></div>
                                    </td>

                                    <td class="product-name">
                                        <h3>{{ $wishlist->product->name}}</h3>
                                        <p>{{ $wishlist->product->description}}</p>
                                    </td>

                                    <td class="quantity">{{ $wishlist->product->type}}</td>

                                    <td class="price">{{ $wishlist->product->price }}</td>
                                </tr><!-- END TR-->
                            @endforeach


                        </tbody>
                    </table>
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