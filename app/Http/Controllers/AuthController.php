<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
// use Session;

class AuthController extends Controller
{
    function showRegistration()  {
        return view('registration');
    }

    function submitRegistration(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);

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

    function submitLogin(Request $request): RedirectResponse {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect()->intended('/admin');
            } else {
                return redirect('/books');
            }
        } else {
            return redirect()->route('registration');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
