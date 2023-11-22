@extends('layouts.app')

@section('title', 'Keranjang Anda')

@section('content')

<!-- Header -->
@include('layouts.header')
<!-- END Header -->

<!-- Navigasi -->
@include('layouts.navigation')
<!-- END Navigasi -->

<!-- Gambar Hero yang Dapat Digunakan Kembali -->
@component('components.hero-bg', [
'backgroundImageUrl' => 'http://127.0.0.1:8000/assets/images/bg-cart.jpg',
'homeUrl' => '/',
'homeText' => 'Beranda',
'pageName' => 'Keranjang Anda',
'pageTitle' => 'Keranjang Anda',
])
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
                                <th>&nbsp;</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            $weight = 0;
                            @endphp
                            @forelse (session('cart', []) as $id => $details)
                            @php
                            $total += $details['price'] * $details['quantity'];
                            $weight += $details['quantity'] * 1000;
                            @endphp
                            <tr class="text-center">
                                
                                <td class="product-remove">
                                    <form id="remove-cart-form-{{ $details['product_id'] }}" action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $details['product_id'] }}">
                                    </form>
                                    <a href="javascript:;" onclick="document.getElementById('remove-cart-form-{{ $details['product_id'] }}').submit()">
                                        <span class="ion-ios-close"></span>
                                    </a>
                                    
                                </td>

                                <td class="image-prod">
                                    <div class="img"
                                        style="background-image:url({{ asset('storage/images/product/')}}/{{ $details['image'] }});">
                                    </div>
                                </td>

                                <td class="product-name">
                                    <h3>{{ $details['name'] }}</h3>
                                    <p>{{ $details['description'] }}</p>
                                </td>

                                <td class="price">Rp. {{ $details['price'] }}</td>

                                <td class="price">{{ $details['quantity'] }} Kg</td>

                                <td class="total">Rp. {{ $details['price'] * $details['quantity'] }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Keranjang Anda kosong.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 mt-5 cart-wrap ftco-animate">
                <form action="" class="info" method="POST">
                    @csrf
                    <!-- Isi formulir Anda di sini -->
                    <h3 class="mb-4 billing-heading">Cek Ongkir</h3>
                    <div class="form-group" style="display: none;">
                        <label for="weight">Kota Asal</label>
                        <input type="text" class="form-control text-left px-3" placeholder="" name="origin" id="origin"
                            value="452" hidden>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="weight">Kota Tujuan</label>
                        <input type="text" class="form-control text-left px-3" placeholder="" name="destination"
                            id="destination" value="{{ Auth::user()->city_id }}" hidden>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="weight">Berat Barang</label>
                        <input type="number" class="form-control text-left px-3" placeholder="" name="weight"
                            id="weight" value="{{$weight}}" hidden required>
                    </div>
                    <div class="form-group">
                        <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="courier" id="courier" class="form-control" required>
                                <option value="">Pilih Kurir</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>
                                <option value="jne">JNE</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary py-3 px-4">Cek Ongkir</button>
                </form><!-- END -->
            </div>
            <div class="col-xl-6 mt-5 cart-wrap ftco-animate">
                <form action="{{ route('checkout.index') }}" class="info" method="POST">
                    @csrf
                    <h3 class="mb-4 billing-heading">Detail Pesanan</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <label for="weight">Nama Anggur</label>
                        </div>
                        <div class="col-md-3">
                            <label for="weight">Jumlah/Kg</label>
                        </div>
                        <div class="col-md-3">
                            <label for="weight">Harga</label>
                        </div>
                        @foreach (session('cart', []) as $id => $details)
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="" value="{{ $details['name'] }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder=""
                                    value="{{ $details['quantity'] }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder=""
                                    value="{{ $details['price'] * $details['quantity'] }}" readonly>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="weight">Total Harga Anggur</label>
                                <input type="number" class="form-control text-left px-3" placeholder="" name="weight"
                                    id="weight" value="{{ $total }}" readonly>
                            </div>
                        </div>
                        @if (!empty($ongkir))
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="shippingCost" id="shippingCost" class="form-control" required>
                                        <option value="0">Pilih Estimasi Pengantaran</option>
                                        @foreach ($ongkir['results'] as $item)
                                        @foreach ($item['costs'] as $cost)
                                        @foreach ($cost['cost'] as $harga)
                                        <option value="{{ $harga['value'] }}">{{ $harga['etd'] }} Hari - Rp.
                                            {{ $harga['value'] }}</option>
                                        @endforeach
                                        @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-md-12">
                            <p class="d-flex">
                                <span>Silahkan lakukan cek ongkir terlebih dahulu</span>
                            </p>
                            <hr>
                        </div>
                        @endif
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary py-3 px-4" id="checkoutBtn" disabled>Checkout
                                Sekarang</button>
                        </div>
                    </div>
                </form><!-- END -->
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
    // Menggunakan JavaScript untuk mengaktifkan tombol checkout hanya jika opsi pengiriman dipilih
    document.getElementById('shippingCost').addEventListener('change', function () {
        document.getElementById('checkoutBtn').disabled = this.value === '0';
    });

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
