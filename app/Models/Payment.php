<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'seller_id',
        'gross_amount',
        'ongkir',
        'service',
        'checkout_link',
    ];

    public function paymentItems()
    {
        return $this->hasMany(PaymentItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function seller()
    {
        return $this->belongsTo(Perusahaan::class, 'seller_id');
    }
}
