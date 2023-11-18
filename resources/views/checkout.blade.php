@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<!-- Header -->
@include('layouts.header')
<!-- END Header -->

<!-- nav -->
@include('layouts.navigation')
<!-- END nav -->

  <!-- Gambar Hero yang Dapat Digunakan Kembali -->
  @component('components.hero-bg', [
    'backgroundImageUrl' => 'http://127.0.0.1:8000/assets/images/bg-cart.jpg',
    'homeUrl' => '/',
    'homeText' => 'Beranda',
    'pageName' => 'Checkout',
    'pageTitle' => 'Checkout',
])
@endcomponent

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                @if (!empty($ongkir))
                    <div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Rincian Ongkir</h3>
                        <p class="d-flex">
                            <span>Kota Asal :</span>
                            <span>{{ $ongkir['origin_details']['city_name'] }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Kota Tujuan :</span>
                            <span>{{ $ongkir['destination_details']['city_name'] }}</span>
                        </p>
                        <p class="d-flex">
                            <span>Berat Paket :</span>
                            <span>{{ $ongkir['query']['weight'] / 1000 }} kg</span>
                        </p>
                        @foreach ($ongkir['results'] as $item)
                        <p class="d-flex">
                            <span>Jasa Pengiriman :</span>
                            <span>{{ $item['name'] }}</span>
                        </p>
                        @if (!empty($item['costs']))
                        @foreach ($item['costs'] as $cost)
                        <br>
                        <p class="d-flex">
                            <span>Service</span>
                            <span>{{ $cost['description'] }}</span>
                        </p>
                        @foreach ($cost['cost'] as $harga)
                        <p class="d-flex">
                            <span>Harga</span>
                            <span>Rp. {{ $harga['value'] }} (est : {{ $harga['etd'] }} Hari)</span>
                        </p>
                        @endforeach
                        @endforeach
                        @else
                        <p class="d-flex">
                            <span>Jasa Pengiriman tidak mendukung rute ini.</span>
                        </p>
                        @endif
                        @endforeach
                    </div>
                    @endif<!<!-- END -->
            </div>
            <div class="col-xl-5">
                <div class="row  pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Harga Barang</span>
                                <span>Rp. {{ session('total') }}</span>
                            </p>
                            <p class="d-flex">
                                <span>Ongkir</span>
                                <span>Rp. {{ session('shippingCost') }}</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total</span>
                                <span>Rp. {{ session('finalTotal') }}</span>
                            </p>
                            <form action="{{ route('checkout.create') }}" class="info" method="POST">
                                @csrf
                                <input type="number" name="ongkir" id="ongkir" value="{{ session('shippingCost') }}" required hidden>
                                <input type="number" name="gross_amount" id="gross_amount" value="{{ session('finalTotal') }}" required hidden>

                                <!-- Tambahkan input jasa pengiriman -->
                                @foreach ($ongkir['results'] as $item)
                                <input type="hidden" name="jasa_pengirim" value="{{ $item['name'] }}">
                                @endforeach
                                
                                <button type="submit" class="btn btn-primary py-3 px-4">Bayar Sekarang</button>
                            </form>
                        </div>
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
