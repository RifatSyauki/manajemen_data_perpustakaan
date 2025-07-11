<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Session;

class AuthController extends Controller
{
    function showRegistration()  {
        return view('registration');
    }

    function submitRegistration(Request $request) {
        Users::create([
            'username' => $request->username,
            'email' => $request->email,
            'is_admin' => false,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login');
    }

    function showLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/books');
            }
        } else {
            return redirect()->route('registration');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
