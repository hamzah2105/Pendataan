<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use function session;

class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }

public function login(Request $request)
{
    // Cari pengguna berdasarkan nama pengguna
    $user = User::where('name', $request->username)->first();

    if ($user) {
        // Jika pengguna ditemukan, cocokkan kata sandi
        if (Hash::check($request->password, $user->password)) {
            // Set session login berhasil
            session(['berhasil_login' => true]);

            // Redirect ke halaman yang sesuai
            return redirect('/pendataan');
        }
    }

    // Jika pengguna tidak ditemukan atau kata sandi tidak cocok, kembali ke halaman login
    return redirect('/login')->with('message', 'Email atau Password salah');
}


    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
