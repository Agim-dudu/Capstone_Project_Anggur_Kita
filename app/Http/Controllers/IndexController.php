<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $products = Product::all();
        $users = User::all();

        return view('index', compact('products', 'users','perusahaans'));
    }
}
