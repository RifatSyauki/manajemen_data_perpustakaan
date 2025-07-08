<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showLogin() {
        return view('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('username', 'password');

        if(Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('book.index');
        }
    }
}
