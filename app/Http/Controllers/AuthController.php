<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)

    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('user_name', Auth::user()->name);
            return redirect()->route('halaman')->with('user_name', Auth::user()->name);
        }
        return back()->withErrors([
            'email' => 'the provied credentials do not match our record.',]);

    }

    public function index()
{
    $medicines = [
        ['name' => 'Mucopect 15 mg/5 ml Sirup', 'price' => 'Rp70.000-Rp74.600'],
        ['name' => 'Mucera 30 mg 10 Tablet', 'price' => 'Rp20.000-Rp20.000'],
        // Add more medicine data here
    ];

    return view('medicine-list', compact('medicines'));
}

    public function logout(Request $request)

    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/awal');
    }


    // public function store(RegisterRequest $request)
    // {
    //     // Validasi data request (jika menggunakan RegisterRequest)
    //     // ...

    //     // Simpan data user ke database
    //     $user = User::create($request->validated());

    //     // Redirect ke halaman.blade.php
    //     return redirect()->route('halaman');
    // }
}
