<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RegisterController;

Route::middleware('auth')->group(function () {
    // admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/admin-dashboard', function () {
            return view('admin.dashboard');
        })->name('admin-dashboard');
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
        Route::get('/posts/{post}/show', [PostController::class, 'show'])->name('posts.show');
        Route::post('/posts/{post}/validate', [PostController::class, 'validate'])->name('posts.validate');
        Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
        Route::get('/add-company', [CompanyController::class, 'create'])->name('company.create');
        Route::post('/add-company/store', [CompanyController::class, 'store'])->name('company.store');
        
        // other admin routes
    });
    // operator routes
    Route::middleware('operator')->group(function () {
        Route::get('/operator-dashboard', function () {
            return view('operator.dashboard');
        })->name('operator-dashboard');
        // other operator routes
    });
    // common routes
    Route::get('/', function () {
        return view('homepage');
    })->name('home');
    Route::post('/search', [PostController::class, 'search'])->name('search');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store']);
});

