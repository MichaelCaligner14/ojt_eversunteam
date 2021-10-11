<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LaravelCrudStudent;
use App\Http\Controllers\StudentsController;    
use App\Http\Controllers\StdntRegController;
use App\Http\Controllers\SubjectsController;


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

Route::post('/register-user', [CustomAuthController::class,'registerUser']) ->name ('register-user');

Route::post('login-user',[CustomAuthController::class,'loginUser'])->name('login-user');

//home
Route::get('/homepage',[CustomAuthController::class,'homepage']);

Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('subjects', [StudentsController::class,'subjects']);


//studentregistration
Route::get('stdntreg', [StdntRegController::class,'stdntreg']);

Route::post('addingstud', [StdntRegController::class,'addingstud']);

Route::post('addstudents', [StudentsController::class,'addstudents']);

Route::get('liststudents', [StdntRegController::class,'liststudents']);


//subject
Route::get('/subjects', [SubjectsController::class,'subjects']);

Route::post('addsubjects', [SubjectsController::class,'addsubjects']);

Route::get('dashboard', [SubjectsController::class,'dashboard']);


//liststudents
Route::get('delete/{id}',[StdntRegController::class,'delete']);

Route::get('edit/{id}',[StdntRegController::class,'edit']);

Route::post('update', [StdntRegController::class,'update'])->name('update');



