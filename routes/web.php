<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(Auth::check()){
        return view('homepage');
    }else{
        return redirect()->route('login');
    }
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
