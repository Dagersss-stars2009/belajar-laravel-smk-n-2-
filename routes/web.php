<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FrontendController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
	return view('beranda');
});
Route::get('/tentang', function () {
	return view('tentang');
});
Route::get('/kontak', function () {
	return view('kontak');
});
Route::get('/frontend', [FrontendController::class, 'index']);

Route::get('/news', [FrontendController::class, 'news']);
Route::get('/galerry', [FrontendController::class, 'galerry']);
Route::get('/about', [FrontendController::class, 'about']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('berita', BeritaController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/auth.php';



