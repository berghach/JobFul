<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create(): View
    {
        $user = Role::where('name', 'user')->first();
        $talent = Role::where('name', 'talent')->first();
        return view('auth.register', compact('user', 'talent'));
    }
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        Auth::login($user);
        return redirect()->intended('home');
        // return dd($data);
    }
}
