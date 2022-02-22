<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {

    Route::get('login', function () {
        return view('auth.login');
    })->name('login.index');

    Route::get('/', function () {
        return view('init');
    })->name('index');

    Route::get('register', function () {
        return view('auth.register');
    })->name('register');

    Route::get('code-generated/{email}', function ($email) {
        return view('code-generated')->with('email', $email);
    })->name('code-generated');
});

Route::get('home', function () {
    return view('layouts.dashboard')->with('user', Auth::user());
})->middleware('auth');

#Route::get('/', function () {
 #   return view('init');
#})->name('index');







#Route::get('/login', [LoginController::class, 'create'])->name('login.index')->middleware('loggedIn');
#Route::post('/login-user', [LoginController::class, 'loginUser'])->name('login-user');
#Route::get('/dashboard', [LoginController::class, 'dashb'])->middleware('isLoggedIn');
#Route::get('/logout', [LoginController::class, 'logout']);
