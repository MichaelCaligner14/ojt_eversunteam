<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

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
    return view('auth.login');
});

/*Auth*/
Route::get('/login', [AuthController::class,'login'])->middleware('alreadyLogIn');
Route::post('/login-user',[AuthController::class, 'loginuser'])->name('login-user');

Route::get('/registration',[AuthController::class,'registration'])->middleware('alreadyLogIn');
Route::post('/register-user',[AuthController::class, 'registeruser'])->name('register-user');

Route::get('/logout',[AuthController::class, 'logout']);

Route::get('/home',[AuthController::class, 'home'])->middleware('isLoggedIn');

Route::get('/user',[AuthController::class, 'user'])->middleware('isLoggedIn');
Route::get('/employee',[AuthController::class, 'employee'])->middleware('isLoggedIn');

Route::get('order',[OrderController::class, 'order'])->middleware('isLoggedIn');
Route::post('add',[OrderController::class, 'add']);
Route::get('edit/{id}', [OrderController::class, 'edit']);