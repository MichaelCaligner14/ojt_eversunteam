<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LaravelCrudStudent;
use App\Http\Controllers\StudentsController;    
use App\Http\Controllers\StdntRegController;

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
Route::get('/login', [CustomAuthController::class,'login']);

Route::get('/registration', [CustomAuthController::class,'registration']);

Route::get('/about', [CustomAuthController::class,'about']);

Route::get('/dashboard', [CustomAuthController::class,'dashboard']);

Route::get('/subjects', [CustomAuthController::class,'subjects']);  

Route::get('/stdntregcourselist', [CustomAuthController::class,'stdntregcourselist']);

Route::get('/stdntregi', [CustomAuthController::class,'stdntregi']);

Route::get('/stdntregis', [CustomAuthController::class,'stdntregis']);

Route::post('/register-user', [CustomAuthController::class,'registerUser']) ->name ('register-user');

Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');


Route::get('/homepage',[CustomAuthController::class,'homepage']);

Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('subjects', [StudentsController::class,'subjects']);



Route::get('stdntreg', [StdntRegController::class,'stdntreg']);

Route::post('addingstud', [StdntRegController::class,'addingstud']);

Route::post('addstudents', [StudentsController::class,'addstudents']);

Route::get('liststudents', [StdntRegController::class,'liststudents']);
