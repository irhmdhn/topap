<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin/admin_login');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($attributes)) {
            return redirect('/a/dashboard')->with('success', 'Berhasil Login');
        };
        throw ValidationException::withMessages([
            'email' => 'Email atau password salah',
        ]);
    }
    public function destroy()
    {
        Auth::logout();

        return redirect(RouteServiceProvider::HOME);
    }
}
