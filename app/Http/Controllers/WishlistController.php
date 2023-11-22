<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
class WishlistController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();

        if (auth()->check()) {
            
            $userId = auth()->id();

            $wishlistProducts = Wishlist::where('user_id', $userId)->get();

            return view('wishlist', compact('perusahaans', 'wishlistProducts'));
        } else {
           
            return view('Login', ['message' => 'Silahkan Login Terlebih Dahulu']);
            
        }

    }

    public function addToWishlist(Request $request)
    {
        // Validasi
        $request->validate([
            'product_id' => 'required',
        ]);

        $user_id = auth()->user()->id; 
        $product_id = $request->input('product_id');

        if (!Wishlist::where(['user_id' => $user_id, 'product_id' => $product_id])->exists()) {
            Wishlist::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);

            return redirect()->route('shop')->with('success', 'Item berhasil ditambahkan ke dalam wishlist.');
        } else {
            return redirect()->route('shop')->with('warning', 'Item Sudah Ada di Wishlist Anda.');
        }
    }


    public function removeFromWishlist(Request $request)
    {
        // Validasi input
        $request->validate([
            'product_id' => 'required|integer',
        ]);

        $user_id = auth()->user()->id;
        $product_id = $request->input('product_id');

        try {
            // Pastikan item ada di wishlist sebelum dihapus
            $wishlistItem = Wishlist::where(['user_id' => $user_id, 'product_id' => $product_id])->firstOrFail();
        
            // Hapus item dari wishlist
            $wishlistItem->delete();
        
            return redirect()->route('wishlist')->with('success', 'Item berhasil dihapus dari wishlist.');
        } catch (ModelNotFoundException $e) {

            // Tangani kasus jika item tidak ditemukan dalam wishlist
            return redirect()->route('wishlist')->withErrors(['error' => 'Item tidak ditemukan dalam wishlist.']);
        } catch (\Exception $e) {
            
            // Tangani kesalahan umum
            return redirect()->route('wishlist')->withErrors(['failure' => 'Terjadi kesalahan saat menghapus item dari wishlist.']);
        }
        
    }

}
