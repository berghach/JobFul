<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsAdmin;

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/admin-dashboard', function () {
            return view('admin.dashboard');
        })->name('admin-dashboard');
        // other admin routes
    });
    Route::middleware('operator')->group(function () {
        Route::get('/operator-dashboard', function () {
            return view('operator.dashboard');
        })->name('operator-dashboard');
        // other operator routes
    });
    Route::get('/', function () {
        return view('homepage');
    })->name('home');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store']);
});

// Route::get('/test', [UserController::class, 'index'])->name('test');
