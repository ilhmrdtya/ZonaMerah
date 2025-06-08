<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function tampilRegistrasi() {
        return view('register'); // Nama file blade sesuai dengan yang kamu buat: register.blade.php
    }

    public function submitRegistrasi(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('login')->with('SUCCESS', 'Registrasi berhasil! Silakan login.');
    }

    public function tampilLogin() {
        return view('login');
    }

    public function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('/welcome');
        } else {
            return redirect()->route('login')->with('GAGAL', 'Email atau Password anda salah...');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function kontak() {
    return view('kontak');
}

    public function Tentang() {
        return view('Tentang');
    }

    public function pesan()
    {
        return view('pesan'); // pastikan ada file resources/views/pesan.blade.php
    }

    public function tukar_tambah()
    {
        return view('tukar_tambah'); // pastikan ada file resources/views/tukar_tambah.blade.php
    }

    public function donasiProduk()
    {
        return view('donasiProduk'); // pastikan ada file resources/views/donasiProduk.blade.php
    }

    public function welcome()
    {
        return view('welcome'); // pastikan ada file resources/views/welcome.blade.php
    }

    public function message()
    {
        return view('message'); // pastikan ada file resources/views/message.blade.php
    }
}

