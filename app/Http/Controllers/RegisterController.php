<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\View\View;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(): View
    {
        $user = Role::where('name', 'user')->first();
        $talent = Role::where('name', 'talent')->first();
        return view('auth.register', compact('user', 'talent'));
    }
    public function store(Request $request){
        $request->validate([
            
        ]);
    }
}
