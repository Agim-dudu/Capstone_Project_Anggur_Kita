<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'first_name',
        'avatar',
        'last_name',
        'phone', // Change to match the seeder attribute name
        'province_id',
        'province',
        'city_id', // Change to match the seeder attribute name
        'city', // Change to match the seeder attribute name
        'address', // Change to match the seeder attribute name
        'postal_code', 
        'password',
        'provider',
        'provider_id',
        'provider_token',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get the addresses associated with the user.
     */

     public function wishlist()
     {
         return $this->hasMany(Wishlist::class, 'user_id', 'id');
     }
}
