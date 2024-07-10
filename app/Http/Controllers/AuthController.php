<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register() {
        return view('auth.register');
    }
    public function login() {
        return view('auth.login');
    }
    public function registerAction(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email:dns',
            'password' => 'required|string|min:5'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>bcrypt ($request->input('password'))
        ]);

        return to_route('login');
    }

    public function loginAction(Request $request) {
        $credential = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            // return redirect('home');
            return redirect('/dashboard');
        } else {
            Session::flash('error', "Email atau Password salah!");
            return redirect('login')->withErrors('Email atau Password salah!');
        }
    }

}
