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

Route::get('/login', [CustomAuthController::class, 'login'])->middleware('alreadyLoggedIn');

Route::get('/register', [CustomAuthController::class, 'register'])->middleware('alreadyLoggedIn');

Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::get('/welcome', [CustomAuthController::class, 'welcome']);

Route::get('/about', [CustomAuthController::class, 'about']);

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/notifset', [CustomAuthController::class, 'notifset']);

Route::get('/privset', [CustomAuthController::class, 'privset']);

Route::get('/payments', [CustomAuthController::class, 'payments']);

Route::get('/payset', [CustomAuthController::class, 'payset']);

Route::get('/profile', [CustomAuthController::class, 'profile']);

Route::get('/profset', [CustomAuthController::class, 'profset']);

Route::get('/reservation', [CustomAuthController::class, 'reservation']);

Route::get('/logout', [CustomAuthController::class, 'logout']);