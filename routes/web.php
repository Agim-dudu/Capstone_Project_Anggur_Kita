<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/about', [ContactFormController::class, 'index'])->name('about');
Route::get('/contact', [ContactFormController::class, 'index'])->name('contact');


Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/shop', [ProductController::class, 'index'])->name('shop');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/payment', [PaymentController::class, 'index'])->name('checkout.index');
    Route::post('/payments', [PaymentController::class, 'create'])->name('checkout.create');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/update-avatar', [ProfileController::class, 'updateAvatar'])->name('update.avatar');
    Route::put('/update-address', [ProfileController::class, 'updateAddress'])->name('profile.address');

    Route::get('/cek-ongkir', [CartController::class, 'index'])->name('cek-ongkir');



    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::get('/product/detail/{id}', [ProductController::class, 'show'])->name('product.show');

    Route::get('/product{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart', [CartController::class, 'CekOngkir']);
    Route::delete('cart/{id}', [CartController::class, 'remove'])->name('cart.remove');


    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

    Route::post('/contact', [ContactFormController::class, 'sendEmail'])->name('contact.send');
    
});

require __DIR__.'/auth.php';
