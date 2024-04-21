<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $admin = User::where('name', 'Admin User')->first();
        $adminRole = $admin->role();
        $role = $admin->role()->first()->name;
        $roles = Role::all();
        $users = Role::where('name', 'user')->users()->get(['*']);
        return dd($adminRole, $role, $roles, $users);
    }
}
