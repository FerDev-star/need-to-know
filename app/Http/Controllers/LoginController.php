<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->except('_token');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('message', 'Incorrect username or password.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.page');
    }
}
