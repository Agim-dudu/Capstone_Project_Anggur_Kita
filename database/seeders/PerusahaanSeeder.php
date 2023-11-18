<?php

namespace Database\Seeders;


use App\Models\Perusahaan;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama jika ada
        Perusahaan::query()->delete();

        $Perusahaan = new Perusahaan([
            'nama_perusahaan' => 'Anggur Kita',
            'logo' => 'logo.jpg',
            'province_id' => "13", // Change to integer, assuming it's an ID
            'province' => 'Kalimantan Selatan',
            'city_id' => "452", // Change to integer, assuming it's an ID
            'city' => 'Tanah Bumbu',
            'postal_code' => '72211',
            'address' => 'Kec. Batulicin | Kabupaten Tanah Bumbu | Kalimantan Selatan | code post:72211',
            'email' => "anggurkita@gmail.com",
            'phone' => "+6281258624198",
            'url' => 'anggurkita.com',
            'jumlah_karyawan' => 4,
            'tahun_pendirian' => 2022,
        ]);

        $Perusahaan->save();
    }
}
