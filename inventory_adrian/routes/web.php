<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmployeeController;


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
    return view('auth.login');
});

/*Auth/login*/
Route::get('/login', [AuthController::class,'login'])->middleware('alreadyLogIn');
Route::post('/login-user',[AuthController::class, 'loginuser'])->name('login-user');

/*Auth/register*/
Route::get('/registration',[AuthController::class,'registration'])->middleware('alreadyLogIn');
Route::post('/register-user',[AuthController::class, 'registeruser'])->name('register-user');

/*logout*/
Route::get('/logout',[AuthController::class, 'logout']);

/*home*/
Route::get('/home',[AuthController::class, 'home'])->middleware('isLoggedIn');

/*user*/
Route::get('/user',[AuthController::class, 'user'])->middleware('isLoggedIn');

/*order*/
Route::get('order',[OrderController::class, 'order'])->middleware('isLoggedIn');
Route::post('add',[OrderController::class, 'add']);
Route::get('update', [OrderController::class, 'update']);
Route::get('delete/{id}', [OrderController::class,'delete']);

/*employee*/
Route::get('employee',[EmployeeController::class, 'employee'])->middleware('isLoggedIn');
Route::post('addemp',[EmployeeController::class, 'addemp']);
Route::get('delete/{id}', [EmployeeController::class,'delete']);

