<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Perusahaan;

class ProductController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $products = Product::all();
        return view('shop', compact('products','perusahaans'));
    }

    public function create()
    {
        return view('tambah_data');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/images/product');
            $data['image'] = basename($path);
        }

        Product::create($data);

        return redirect()->route('product')->with('success', 'Produk berhasil ditambahkan!');
    }


    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('update_product', compact('products'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = $request->validated();

        // Update file gambar jika diunggah
        if ($request->hasFile('image')) {
            
            // Hapus file gambar lama dari penyimpanan (storage)
            Storage::delete('public/images/product/' . $product->image);

            // Simpan file gambar baru
            $path = $request->file('image')->store('public/images/product');
            $data['image'] = basename($path);
        }

        // Update data di database
        $product->update($data);

        return redirect()->route('admin.tabel_data.index')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus file gambar terkait
        if (Storage::exists('public/images/product/' . $product->image)) {
            Storage::delete('public/images/product/' . $product->image);
        }

        $product->delete();

        return redirect()->route('admin.tabel_data.index')->with('success', 'Produk berhasil dihapus!');
    }


    public function show($id)
    {
        $perusahaans = Perusahaan::all();
        $product = Product::find($id);

        if (!$product) {
            // Handle jika produk tidak ditemukan
            abort(404);
        }

        return view('product-single', compact('product','perusahaans'));
    }
}
