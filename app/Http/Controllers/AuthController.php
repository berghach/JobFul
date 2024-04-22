<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role->name == 'admin'){
                return redirect()->route('admin-dashboard');
            }elseif(Auth::user()->role->name == 'operator'){
                return redirect()->route('operator-dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->back()->withErrors(['login' => 'The provided credentials do not match our records.']);
        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}