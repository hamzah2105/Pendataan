<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasi\OtentikasiController;
use App\Http\Controllers\PendataanBarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\HomeController;


Route::get('/', function(){
    // return redirect('/login');
    return redirect('/pendataan');
});

// Route::resource('/pendataan/jenis-barang', JenisBarangController::class)->middleware('LoginStatusMiddleware');
// Route::resource('/pendataan', PendataanBarangController::class)->middleware('LoginStatusMiddleware');
Route::resource('/pendataan/jenis-barang', JenisBarangController::class);
Route::resource('/pendataan', PendataanBarangController::class);


Route::get('/login', [OtentikasiController::class, 'index'])->name('login');
Route::post('/login', [OtentikasiController::class, 'login'])->name('login');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/pendataan/create', [PendataanBarangController::class, 'create'])->middleware('require.login');
// Route::post('/pendataan/create', [PendataanBarangController::class, 'store'])->middleware('LoginStatusMiddleware');
