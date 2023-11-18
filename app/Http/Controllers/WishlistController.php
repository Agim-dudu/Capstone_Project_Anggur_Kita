<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WishlistController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $products = Product::all();
        return view('wishlist', compact('products','perusahaans'));
    }
}
