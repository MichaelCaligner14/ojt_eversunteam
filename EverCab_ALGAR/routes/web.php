<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('alreadyLoggedIn')->group(function(){
    Route::get('/login', [CustomAuthController::class, 'login']);
    Route::get('/register', [CustomAuthController::class, 'register']);
});

Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::get('/logout', [CustomAuthController::class, 'logout']);

Route::get('/welcome', [CustomAuthController::class, 'welcome']);

Route::get('/about', [CustomAuthController::class, 'about']);

Route::middleware('isLoggedIn')->group(function(){
    Route::get('/dashboard', [CustomAuthController::class, 'dashboard']);
    Route::get('/notifset', [CustomAuthController::class, 'notifset']);   
    Route::get('/privset', [CustomAuthController::class, 'privset']);   
    Route::get('/payments', [CustomAuthController::class, 'payments']);   
    Route::get('/payset', [CustomAuthController::class, 'payset']);
});

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showprofile');

Route::get('/profset', [ProfileController::class, 'addProfile'])->name('addprofile');

Route::post('/profset', [ProfileController::class, 'saveProfile'])->name('saveprofile');

Route::get('/profedit/{id}', [ProfileController::class, 'editProfile'])->name('editprofile');

Route::get('/profiledelete/{id}', [ProfileController::class, 'deleteProfile'])->name('deleteprofile');

Route::post('/profileupdate', [ProfileController::class, 'updateProfile'])->name('updateprofile');

Route::get('/reservationadd', [ReservationController::class, 'addReservation'])->name('addreservation');

Route::post('/reservationadd', [ReservationController::class, 'saveReservation'])->name('savereservation');

Route::get('/reservationlist', [ReservationController::class, 'listReservation'])->name('listreservation');

Route::get('/reservationedit/{id}', [ReservationController::class, 'editReservation'])->name('editreservation');

Route::get('/reservationcancel/{id}', [ReservationController::class, 'cancelReservation'])->name('cancelreservation');

Route::post('/reservationupdate', [ReservationController::class, 'updateReservation'])->name('updatereservation');

Route::get('/driverapp', [DriverController::class, 'driverApp'])->name('driverapp');