<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $validCredentials = ($credentials['email'] == 'admin' && $credentials['password'] == 'admin');

        if ($validCredentials) {
            $request->session()->put('logged_in', true);
            return redirect('/doc');
        } else {
            return back()->withErrors([
                'email' => 'Las credenciales no son válidas.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
