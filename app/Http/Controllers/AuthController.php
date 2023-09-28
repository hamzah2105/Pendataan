<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Validator;
use App\Models\User; // Tambahkan impor ini di atas

class AuthController extends Controller
{
    // Metode untuk menampilkan formulir registrasi
    public function showRegistrationForm()
    {
        return view('otentikasi.register');
    }

    // Metode untuk memproses registrasi pengguna
    public function register(Request $request)
    {
        // Validasi data masukan pengguna
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru dalam database
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Login pengguna setelah registrasi
        auth()->login($user);

        // Redirect ke halaman yang sesuai setelah registrasi
        return redirect('/home');
    }
}
