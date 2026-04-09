<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validateWithBag('adminLogin', [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $expectedEmail = env('ADMIN_EMAIL', 'admin@wicci.in');
        $expectedPassword = env('ADMIN_PASSWORD', 'admin12345');

        if ($credentials['email'] !== $expectedEmail || $credentials['password'] !== $expectedPassword) {
            return back()
                ->withErrors(['email' => 'Invalid admin credentials.'], 'adminLogin')
                ->onlyInput('email');
        }

        $request->session()->regenerate();
        $request->session()->put('admin_authenticated', true);

        return redirect()->route('admin.dashboard')->with('success', 'Welcome back.');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin_authenticated');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
