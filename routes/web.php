<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;



Route::get('/register', function () {
    return view('auth.register');
});

Route::middleware('auth')->group(function () {
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