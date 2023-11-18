<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $products = Product::all();
        return view('about', compact('products','perusahaans'));
    }
}
