<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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

Route::get('/login', [CustomAuthController::class, 'login']);

Route::get('/register', [CustomAuthController::class, 'register']);

Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('/notifset', function () {
    return view('notifset');
});

Route::get('/p&sset', function () {
    return view('p&sset');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/payset', function () {
    return view('payset');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/profset', function () {
    return view('profset');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/logout', [CustomAuthController::class, 'logout']);