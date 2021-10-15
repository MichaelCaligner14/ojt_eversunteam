<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;

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

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showprofile');

Route::get('/profset', [ProfileController::class, 'addProfile'])->name('addprofile');

Route::post('/profset', [ProfileController::class, 'saveProfile'])->name('saveprofile');

Route::get('/reservationadd', [ReservationController::class, 'addReservation'])->name('addreservation');

Route::post('/reservationadd', [ReservationController::class, 'saveReservation'])->name('savereservation');

Route::get('/reservationlist', [ReservationController::class, 'listReservation'])->name('listreservation');

Route::get('/reservationedit/{id}', [ReservationController::class, 'editReservation'])->name('editreservation');

Route::get('/reservationcancel/{id}', [ReservationController::class, 'cancelReservation'])->name('cancelreservation');

Route::post('/reservationupdate', [ReservationController::class, 'updateReservation'])->name('updatereservation');

Route::get('/logout', [CustomAuthController::class, 'logout']);