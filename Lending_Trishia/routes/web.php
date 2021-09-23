<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/borrowers', function () {
    return view('borrowers');
});

Route::get('/loans', function () {
    return view('loans');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/user', function () {
    return view('user');
});