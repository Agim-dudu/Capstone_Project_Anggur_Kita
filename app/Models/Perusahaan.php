<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;
    
    protected $table = 'perusahaans';

    protected $fillable = [
        'nama_perusahaan',
        'logo',
        'province_id',
        'province',
        'city_id',
        'city',
        'postal_code',
        'address',
        'email',
        'phone',
        'url',
        'jumlah_karyawan',
        'tahun_pendirian',
    ];
}
