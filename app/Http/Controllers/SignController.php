<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignController extends Controller
{
    public function Signin()
    {
        return view('Sign.Signin', [
            'title' => 'Sign In'
        ]);
    }

    public function Register()
    {
        return view('Sign.Register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $val = $request->validate(
            [
                'name' => 'required|min:5|max:20',
                'username' => 'required|min:5|max:20|unique:users',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5|max:255'
            ]
        );
        
        $val['password'] = Hash::make($val['password']);
        User::create($val);
        return redirect('/login')->with('success', 'Register Berhasil');
    }

    public function authenticate(Request $request)
    {
        $val = $request->validate(
            [
                'email' => 'required|email ',
                'password' => 'required'
            ]
        );

        if (Auth::attempt($val)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('errlog', 'Login Gagal');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
