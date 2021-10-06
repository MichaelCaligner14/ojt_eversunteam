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

Route::get('/notifset', [CustomAuthController::class, 'notifset'])->middleware('isLoggedIn');

Route::get('/privset', [CustomAuthController::class, 'privset'])->middleware('isLoggedIn');

Route::get('/payments', [CustomAuthController::class, 'payments'])->middleware('isLoggedIn');

Route::get('/payset', [CustomAuthController::class, 'payset'])->middleware('isLoggedIn');

Route::get('/profile', [CustomAuthController::class, 'profile'])->middleware('isLoggedIn');

Route::get('/profset', [CustomAuthController::class, 'profset'])->middleware('isLoggedIn');

Route::get('/reservationlist', [CustomAuthController::class, 'reservationlist'])->middleware('isLoggedIn');

Route::get('/reservationedit', [CustomAuthController::class, 'reservationedit'])->middleware('isLoggedIn');

Route::get('/reservationadd', [CustomAuthController::class, 'reservationadd'])->middleware('isLoggedIn');

Route::get('/logout', [CustomAuthController::class, 'logout']);