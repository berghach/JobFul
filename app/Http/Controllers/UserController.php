<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $admin = User::where('name', 'Admin User')->first();
        // $adminRole = $admin->role();
        // $role = $admin->role()->first()->name;
        // $roles = Role::all();
        // $userRole = Role::where('name', 'user')->first();

        // $users = $userRole->users()->get(['id', 'name']);
        // return dd($adminRole, $role, $roles, $userRole, $users);
    }
}
