<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    public function run()
    {

        // Hapus data lama jika ada
        Product::query()->delete();

        $products1 = new Product([
            'name' => 'Anggur Merah Premium',
            'description' => 'Varietas anggur merah yang sangat manis.',
            'price' => 50000,
            'stock' => 100,
            'weight' => 1000,
            'type' => 'Anggur Merah (Red Grapes)',
            'image' => 'anggur_merah.jpg',
        ]);
        $products1->save();
        
        $products2 = new Product([
            'name' => 'Anggur Hitam Pilihan',
            'description' => 'Varietas anggur hitam yang lezat.',
            'price' => 50000,
            'stock' => 80,
            'weight' => 1000,
            'type' => 'Anggur Hitam (Black Grapes)',
            'image' => 'anggur_hitam.jpg',
        ]);
        $products2->save();
        
        $products3 = new Product([
            'name' => 'Anggur Table Segar',
            'description' => 'Anggur meja segar dengan rasa manis.',
            'price' => 50000,
            'stock' => 120,
            'weight' => 1000,
            'type' => 'Anggur Meja (Table Grapes)',
            'image' => 'anggur_meja.jpg',
        ]);
        $products3->save();

    }
}
