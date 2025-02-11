<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    // Login function
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Auth::login($user);
                session(['user' => $user]);
                return redirect()->route('index')->with('success', 'Login berhasil');
            } else {
                return redirect()->back()->withErrors(['password' => 'Password tidak sesuai'])->withInput();
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'Email tidak terdaftar'])->withInput();
        }
    }

    // Logout function
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil');
    }
}
