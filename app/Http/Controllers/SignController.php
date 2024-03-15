<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\Auth\SignUpRequest;
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

    public function store(SignUpRequest $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('signin.view')
            ->with('success', 'Sign up success');
    }

    public function authenticate(SignInRequest $request)
    {
        $auth = [
            'email'     => $request->get('email'),
            'password'  => $request->get('password'),
        ];

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();

            return redirect()->route('index');
        }

        return back()->with('error', 'Sign in failed');
    }

    public function signOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('signin.view');
    }
}
