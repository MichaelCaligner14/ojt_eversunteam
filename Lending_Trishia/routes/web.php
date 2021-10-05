<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BorrowerController;
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


Route::get('/index', function () {
    return view('index');
});


Route::get('/login', [CustomAuthController:: class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController:: class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController:: class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController:: class,'loginUser'])->name('login-user');
Route::get('/home',[CustomAuthController:: class,'home'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController:: class,'logout']);
Route::get('/user',[CustomAuthController:: class,'user']);
Route::get('/loanreport',[CustomAuthController:: class,'loanreport']);
Route::get('payments',[CustomAuthController:: class,'payments']);
Route::get('sample',[CustomAuthController:: class,'sample']);
Route::get('loan',[CustomAuthController:: class,'loan']);



Route::get('borrowers',[BorrowerController:: class,'borrowers']);
Route::post('add',[BorrowerController:: class,'add']);
Route::get('delete/{id}',[BorrowerController:: class,'delete']);





