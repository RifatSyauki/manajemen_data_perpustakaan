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

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('book.index');
        } else {
            return redirect()->back();
        }
    }
}
