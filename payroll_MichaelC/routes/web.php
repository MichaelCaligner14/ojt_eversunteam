<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Employeelist;
use App\Http\Controllers\Attendance;
use App\Http\Controllers\Records;
use App\Http\Controllers\Salary;


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
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('/employee',[Employeelist::class,'employee'])->middleware('isLoggedIn');
Route::post('/add',[Employeelist::class,'add']);
Route::get('delete/{id}',[Employeelist::class,'delete']);

Route::get('edit/{id}',[Employeelist::class,'edit']);
Route::post('update',[Employeelist::class,'update'])->name('update');


Route::get('/attendance',[Attendance::class,'attendance'])->middleware('isLoggedIn');
Route::post('/addattendance',[Attendance::class,'addattendance']);

Route::get('/records',[Records::class,'records'])->middleware('isLoggedIn');
Route::post('/records',[Records::class,'searchRecord']) ->name('records');
Route::get('deleterecord/{id}',[Records::class,'deleterecord']);

Route::get('/salary',[Salary::class,'salary'])->middleware('isLoggedIn');
Route::post('/addsalary',[Salary::class,'addsalary']);
Route::post('/salary',[Salary::class,'searchSalary']) ->name('salary');
Route::get('deletesalary/{id}',[Salary::class,'deletesalary']);

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');
});
