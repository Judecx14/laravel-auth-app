<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('init');
})->name('index');


Route::get('/login', [LoginController::class, 'create'])->name('login.index')->middleware('loggedIn');
Route::post('/login-user', [LoginController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [LoginController::class, 'dashb'])->middleware('isLoggedIn');
Route::get('/logout', [LoginController::class, 'logout']);
