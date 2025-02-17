<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LaguController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MerchandiseController;

use App\Http\Controllers\DashboardController;





Route::get('/home', function () {
    return view('home'); // View untuk halaman home
})->middleware('auth')->name('home'); // Pastikan halaman home hanya bisa diakses jika sudah login

Route::post('/login', [LoginController::class, 'authenticate'])->name('login'); // Route untuk login
Route::post('/register', [RegisterController::class, 'authenticate'])->name('register');
// Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::resource('bands', BandController::class);
Route::resource('albums', AlbumController::class);
Route::resource('lagu', LaguController::class);
Route::resource('events', EventController::class);
Route::resource('merchandise', MerchandiseController::class);

// Route::get('/dashboard', [DashboardController::class, 'indexPage']);
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
