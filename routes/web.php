<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;

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
    return view('login');
});

Route::get('/login',[LogInController::class,'login']);
Route::get('/sign',[LogInController::class,'sign']);
Route::post('/sign-user',[LogInController::class,'signUser']) ->name('sign-user');
Route::post('/login-user',[LogInController::class,'loginUser']) ->name('login-user');
Route::get('/index',[LogInController::class,'index']);