<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\patientController;
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
    return view('login');
});

Route::get('/login',[LogInController::class,'login']);
Route::get('/sign',[LogInController::class,'sign']);
Route::post('/sign-user',[LogInController::class,'signUser']) ->name('sign-user');
Route::post('/login-user',[LogInController::class,'loginUser']) ->name('login-user');
Route::get('/index',[LogInController::class,'index']) ->middleware('isLoggedIn');

Route::get('/logout',[LogInController::class,'logout']);


Route::get('/patient',[patientController::class,'patient']);
Route::post('/patient-page',[patientController::class,'patientPage']) ->name('patient-page');

Route::get('/patview',[patientController::class,'patview']);

Route::get('delete/{id}',[patientController::class,'delete']);
