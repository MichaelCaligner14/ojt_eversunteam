<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Employeelist;


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

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuthController::class,'registration']);
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/employee',[Employeelist::class,'employee'])->middleware('isLoggedIn');
Route::post('/add',[Employeelist::class,'add']);
Route::get('delete/{id}',[Employeelist::class,'delete']);

Route::get('edit/{id}',[Employeelist::class,'edit']);
Route::post('update',[Employeelist::class,'update'])->name('update');


Route::get('/attendance',[Employeelist::class,'attendance']);
Route::get('/records',[Employeelist::class,'records']);
Route::get('/salary',[Employeelist::class,'salary']);
