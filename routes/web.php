<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LaguController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Middleware\IsAdmin; // Tambahkan middleware di sini

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman Home (Hanya Bisa diakses jika login)
Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// Route untuk login & register
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ✅ Gunakan `Route::group()` untuk admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('bands', BandController::class);
    Route::resource('albums', AlbumController::class);
    Route::resource('lagu', LaguController::class);
    Route::resource('events', EventController::class);
    Route::resource('merchandise', MerchandiseController::class);
});

// ✅ Proteksi untuk user yang login
Route::middleware(['auth'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});

Auth::routes();
