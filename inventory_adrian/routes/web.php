<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customauthcontroller;
use App\Http\Controllers\Data;

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

Route::get('/login', function () {
    return view('login');
});
/*Register*/
Route::get('/login', [customauthcontroller::class,'login'])->middleware('alreadyLogIn');
Route::get('/registration',[customauthcontroller::class,'registration'])->middleware('alreadyLogIn');
Route::post('/register-user',[customauthcontroller::class, 'registeruser'])->name('register-user');

/*Login*/
Route::post('/login-user',[customauthcontroller::class, 'loginuser'])->name('login-user');
Route::get('/home',[customauthcontroller::class, 'home'])->middleware('isLoggedIn');
Route::get('/user',[customauthcontroller::class, 'user'])->middleware('isLoggedIn');
Route::get('/logout',[customauthcontroller::class, 'logout']);




Route::get('/order',[customauthcontroller::class, 'order'])->middleware('isLoggedIn');
Route::get('/product',[customauthcontroller::class, 'product'])->middleware('isLoggedIn');
Route::get('/category',[customauthcontroller::class, 'category'])->middleware('isLoggedIn');
Route::get('/inventory',[customauthcontroller::class, 'inventory'])->middleware('isLoggedIn');

