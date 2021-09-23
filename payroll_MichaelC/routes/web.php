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
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/records', function () {
    return view('records');
});

Route::get('/salary', function () {
    return view('salary');
});

