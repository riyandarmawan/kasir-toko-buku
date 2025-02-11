<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'title' => 'Masuk',
        ];

        return view('pages.auth.login', $data);
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:penggunas,username',
            'password' => 'required',
        ], [
            // password
            'username.required' => 'Username harus diisi!',
            'username.exists' => 'Username tidak ditemukan!',

            // password
            'password.required' => 'Password harus diisi!',
        ]);

        if (auth('pengguna')->attempt($credentials)) {
            session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['password' => 'Password yang anda masukkan salah!'])->onlyInput('username');
    }

    public function logout()
    {
        auth('pengguna')->logout();

        session()->regenerate();

        return redirect('/auth/login');
    }
}
