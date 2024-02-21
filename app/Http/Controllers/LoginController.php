<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{


    public function index() {
        return view('auth.AuthLogin', [
            "page" => "Login"
        ]);
    }


    public function login(Request $request) {
        $credentails = $request->validate([
            "username" => ["required"],
            "password" => ["required"],
        ]);

        if(Auth::attempt($credentails)) {
            $request->session()->regenerate();

            return redirect()->intended('job-vacancy');
        }

        return back()->with('auth-failed', 'Authentication Failed!');
    }
}
