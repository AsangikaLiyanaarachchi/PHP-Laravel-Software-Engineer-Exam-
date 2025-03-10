<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    function register()
    {
        return view('auth.register');
    }

    function registerPost(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return redirect(route("home"))->with("Success", "Registation successfull");
        }
        return redirect(route("register"))->with("error", "Ragistation failed");
    }

    function login()
    {
        return view(view: 'auth.login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials,$remember)) {
            return redirect()->intended(route("home"));
        }
        return redirect(route("login"))->with("error", "Invalid email or username");
    }

    function logout()
    {
        Auth::logout();
        return redirect(route("login"));
    }
}
