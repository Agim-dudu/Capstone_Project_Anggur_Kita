<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        try {

            // Validasi formulir
            $request->validate([
                'weight' => 'required|numeric',
                'shippingCost' => 'required|numeric',
            ]);

            // Ambil data dari formulir
            $total = $request->input('weight');
            $shippingCost = $request->input('shippingCost');

            // Hitung total akhir
            $finalTotal = $total + $shippingCost;

            // Simpan data dalam variabel session untuk digunakan di halaman checkout
            session(['finalTotal' => $finalTotal, 'total' => $total, 'shippingCost' => $shippingCost]);

            // Redirect ke halaman checkout
            return redirect()->route('checkout.index');

        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function index()
    {
        $perusahaans = Perusahaan::all();
        $cart = session()->get('cart', []);
        $ongkir = session()->get('ongkir');

        return view('checkout', compact('cart', 'ongkir','perusahaans'));
    }
}
