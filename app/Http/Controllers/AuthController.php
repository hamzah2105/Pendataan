<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Tambahkan impor ini di atas

class AuthController extends Controller
{
    // Metode untuk menampilkan formulir registrasi
public function showRegistrationForm()
{
    if(auth()->check()) {
        return redirect('/home'); // Jika pengguna sudah login, arahkan ke halaman home atau halaman lain yang sesuai
    }

    return view('otentikasi.register');
}


    // Metode untuk memproses registrasi pengguna
public function register(Request $request)
{
    // Buat pengguna baru dalam database
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->nama_lengkap = $request->nama_lengkap;
    $user->no_ktp = $request->no_ktp;
    $user->no_bpjs = $request->no_bpjs;
    $user->npwp = $request->npwp;
    $user->pekerjaan = $request->pekerjaan;
    $user->nomor_hp = $request->nomor_hp;
    $user->password = Hash::make($request->password);
    $user->save();

    // Login pengguna setelah registrasi
    auth()->login($user);

    // Redirect ke halaman yang sesuai setelah registrasi
    return redirect('/login');
}
}
