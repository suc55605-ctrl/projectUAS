<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;

// Landing page
Route::get('/', [LandingController::class, 'index'])->name('landing');
//berita 
Route::get('/berita', [LandingController::class, 'beritaSemua'])->name('berita.public');
Route::get('/berita/{id}', [LandingController::class, 'beritaDetail'])->name('berita.detail');


// Lowongan (public)
Route::prefix('lowongan')->group(function () {
    Route::get('/', [LandingController::class, 'lowonganSemua'])->name('lowongan.public');
    Route::get('/{id}', [LandingController::class, 'lowonganDetail'])->name('lowongan.detail');
});

// LOGIN
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-proses', [AuthController::class, 'loginProses']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





// ADMIN AREA 
Route::middleware(['admin'])->prefix('admin')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // CRUD BERITA (resource route)
    Route::resource('berita', BeritaController::class);

    // CRUD LOWONGAN (resource route)
    Route::resource('lowongan', LowonganController::class);
});
