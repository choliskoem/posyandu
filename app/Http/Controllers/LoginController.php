<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ( ){
        return view('pages.login');
    }

    public function login(Request $request)
    {


        $credentials = $request->only('noKK', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Ganti dengan halaman tujuan setelah login
        }

        return back()->withErrors([
            'noKK' => 'Username atau password salah.',
        ]);
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
