<?php

namespace App\Http\Controllers\Cart;

use App\Models\User;
use App\Models\Product;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CartController extends Controller
{
    public function index()
    {
        // Ambil data produk
        $products = Product::all();
        $perusahaans = Perusahaan::all();
        $users = User::all();
        $ongkir = session('ongkir', null);

        // Menggunakan compact untuk menyusun variabel-variabel ke dalam array
        return view('cart', compact('products', 'perusahaans', 'users', 'ongkir'));
    }


    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_id" => $product->id,
                "name" => $product->name,
                "description" => $product->description,
                "image" => $product->image,
                "price" => $product->price,
                "weight" => $product->weight,
                "type" => $product->type,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk telah ditambahkan ke keranjang');
    }

    public function cart()
    {
        return view('cart');
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed');
        }
    }

    public function CekOngkir(Request $request)
    {
        try {
            // Jika nilai origin adalah "-", arahkan ke halaman profil
            if ($request->origin == "-") {
                return redirect()->route('profile.edit')->with('warning', 'Silahkan isi alamat pada halaman profil Anda.');
            }elseif (is_null($request->weight) || empty($request->weight)) {
                return redirect()->route('shop')->with('warning', 'Silahkan Pilih Product Dulu Agar Berat Barang di Ketahui.');
            }

            $response = Http::withHeaders([
                'key' => env('RAJAONGKIR_API_KEY'),
            ])->get('https://api.rajaongkir.com/starter/city');

            $responseCost = Http::withHeaders([
                'key' => env('RAJAONGKIR_API_KEY'),
            ])->post('https://api.rajaongkir.com/starter/cost', [
                'origin' => $request->origin,
                'destination' => $request->destination,
                'weight' => $request->weight,
                'courier' => $request->courier,
            ]);

            $cities = $response['rajaongkir']['results'];
            $ongkir = $responseCost['rajaongkir'];
            // dd($ongkir);

            session(['ongkir' => $ongkir]);
            $perusahaans = Perusahaan::all();

            return view('cart', ['cities' => $cities, 'ongkir' => $ongkir, $perusahaans => 'perusahaans']);
        } catch (\Exception $e) {
            // Menangani kesalahan dan memberikan respons
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
