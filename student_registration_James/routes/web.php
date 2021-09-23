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

Route::get('/welcome', function () {
    return view('welcome');

});


Route::get('/home', function () {
    return view('home');

});
Route::get('/about', function () {
    return view('about');

});
Route::get('/dashboard', function () {
    return view('dashboard');

});
Route::get('/liststudents', function () {
    return view('liststudents');

});
Route::get('/signup', function () {
    return view('signup');

});
Route::get('/startpage', function () {
    return view('startpage');

});
Route::get('/stdntreg', function () {
    return view('stdntreg');

});
Route::get('/stdntregcourselist', function () {
    return view('stdntregcourselist');

});

Route::get('/stdntregi', function () {
    return view('stdntregi');

});

Route::get('/stdntregis', function () {
    return view('stdntregis');

});





