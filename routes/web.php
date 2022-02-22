<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return view('init');
    })->name('index');
    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('sign-up', function () {
        return view('sign-up');
    })->name('sign-up');

    Route::get('login', function () {
        return view('login');
    })->name('login');

    Route::get('code-generated/{email}', function ($email) {
        return view('code-generated')->with('email', $email);
    })->name('code-generated');
});

Route::get('home', function () {
    return view('home')->with('user', Auth::user());
})->middleware('auth');





Route::get('/login', [LoginController::class, 'create'])->name('login.index')->middleware('loggedIn');
Route::post('/login-user', [LoginController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [LoginController::class, 'dashb'])->middleware('isLoggedIn');
Route::get('/logout', [LoginController::class, 'logout']);
