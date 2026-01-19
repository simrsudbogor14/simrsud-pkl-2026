<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        if ($request->username === 'admin' && $request->password === '12345') {
            Session::put('login', true);
            return redirect('/menu/fabian');
        }

        return back()->with('error', 'Username atau password salah');
    }
}
