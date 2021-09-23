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

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/sign', function () {
    return view('sign');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/patient', function () {
    return view('patient');
});

Route::get('/appointment', function () {
    return view('appointment');
});


Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/result', function () {
    return view('result');
});

Route::get('/payment', function () {
    return view('payment');
});



