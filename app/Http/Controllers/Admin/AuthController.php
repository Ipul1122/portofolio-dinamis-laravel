<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
    
        if ($username === 'admin' && $password === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }
    
        return redirect()->route('admin.login')->with('error', 'Username atau password salah.');
    }    
}
