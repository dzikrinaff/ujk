<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LaguController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MusisiController;
use App\Http\Controllers\AdminPemesananController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PemesananController;
use App\Http\Middleware\IsAdmin;

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Public Routes
Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/events', [FrontController::class, 'events'])->name('events');
Route::get('/musisi', [FrontController::class, 'musisi'])->name('musisi');
Route::get('/album', [FrontController::class, 'albums'])->name('albums');
Route::get('/album/{id}', [FrontController::class, 'detailAlbum'])->name('album.detail');
Route::get('/video', [FrontController::class, 'videos'])->name('videos');
Route::get('/merchandises', [FrontController::class, 'merchandises'])->name('merchandises.index');

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('bands', BandController::class);
    Route::resource('albums', AlbumController::class);
    Route::resource('lagu', LaguController::class);
    Route::resource('events', EventController::class);
    Route::resource('merchandise', MerchandiseController::class);
    Route::resource('musisi', MusisiController::class);

    Route::get('/pemesanan', [AdminPemesananController::class, 'index'])->name('admin.pemesanan.index');
    Route::get('/pemesanan/{id}', [AdminPemesananController::class, 'show'])->name('admin.pemesanan.show');
});

// Authenticated User Routes
Route::middleware(['auth'])->group(function () {
    // Redirect to welcome page after login
    Route::get('/home', function () {
        return view('welcome'); // Mengarahkan ke halaman welcome
    })->name('home');


    // Merchandise Detail
    Route::get('/merchandises/{id}', [FrontController::class, 'showMerchandise'])->name('merchandises.show');
    
    // Cart System
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{id}', [CartController::class, 'store'])->name('cart.add');
    Route::put('/cart/update/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/destroy/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    
// Route::middleware('auth')->post('/checkout', [MidtransController::class, 'checkout']);
// Route::post('/midtrans/callback', [MidtransController::class, 'callback']);
// // Route::post('/checkout-process', [CheckoutController::class, 'process'])->name('checkout.process');
// // Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
// Route::get('/checkout', [MidtransController::class, 'index'])->name('checkout.index');
// Route::post('/checkout/process', [MidtransController::class, 'checkout'])->name('checkout.process');
// Route::post('/midtrans/checkout', [MidtransController::class, 'checkout'])->name('midtrans.checkout');
// Route::post('/midtrans/callback', [MidtransController::class, 'callback']);
});
// Halaman checkout
Route::get('/checkout', [MidtransController::class, 'index'])->name('checkout.index')->middleware('auth');

// Proses checkout
Route::post('/checkout/process', [MidtransController::class, 'process'])->name('checkout.process')->middleware('auth');
// Halaman Checkout
Route::get('/checkout', [MidtransController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [MidtransController::class, 'process'])->name('checkout.process');
Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/checkout/success/{pemesanan_id}', [CartController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/checkout/success', [PemesananController::class, 'success'])->name('checkout.success');
Route::get('/payment/error', [PemesananController::class, 'paymentError'])->name('payment.error');

// Hasil Pembayaran
Route::get('/payment/success', [MidtransController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment/pending', [MidtransController::class, 'paymentPending'])->name('payment.pending');
Route::get('/payment/error', [MidtransController::class, 'paymentError'])->name('payment.error');
Route::post('/checkout/process', [MidtransController::class, 'process'])
     ->name('checkout.process')
     ->middleware('auth');
// Callback dari Midtrans
Route::post('/midtrans/callback', [MidtransController::class, 'callback']);
Route::post('midtrans-callback', [MidtransController::class, 'handleNotification']);
Route::post('/midtrans-callback', [MidtransController::class, 'handleNotification'])
     ->withoutMiddleware(['csrf']); 
Auth::routes();