<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\otentikasi\OtentikasiController;
use App\Http\Controllers\PendataanBarangController;
use App\Http\Controllers\JenisBarangController;

Route::get('/', function(){
    // return redirect('/login');
    return redirect('/pendataan');
});
Route::get('/login', [OtentikasiController::class, 'index'])->name('login');
Route::post('/login', [OtentikasiController::class, 'login'])->name('login');
Route::get('/logout', [OtentikasiController::class, 'logout'])->name('logout');

// Route::resource('/pendataan/jenis-barang', JenisBarangController::class)->middleware('LoginStatusMiddleware');
// Route::resource('/pendataan', PendataanBarangController::class)->middleware('LoginStatusMiddleware');
Route::resource('/pendataan/jenis-barang', JenisBarangController::class);
Route::resource('/pendataan', PendataanBarangController::class);
Route::resource('/pendataan/crate', PendataanBarangController::class)->middleware('LoginStatusMiddleware');
