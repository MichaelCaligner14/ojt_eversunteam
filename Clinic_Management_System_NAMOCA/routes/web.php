<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\resultController;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\paymentController;
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
    return view('auth/login');
});
//login and signIn
Route::get('/login',[LogInController::class,'login']);
Route::get('/sign',[LogInController::class,'sign']);
Route::post('/sign-user',[LogInController::class,'signUser']) ->name('sign-user');
 Route::post('/login-user',[LogInController::class,'loginUser']) ->name('login-user');




Route::get('/index',[LogInController::class,'index']) ->middleware('isLoggedIn');

Route::get('/logout',[LogInController::class,'logout']);

//patient
Route::get('/patient',[patientController::class,'patient']);
Route::post('/patient-page',[patientController::class,'patientPage']) ->name('patient-page');

Route::get('/patview',[patientController::class,'patview']);
//delete patient
Route::get('deletes/{id}',[patientController::class,'deletes']);

//edit patient
Route::get('edit/{id}', [patientController::class, 'edit']);
Route::post('update', [patientController::class,'update'])->name('update');


//result
Route::get('/result',[resultController::class,'result']);
Route::post('/result-page',[resultController::class,'resultPage']) ->name('result-page');

//delete result
Route::get('delete/{id}',[resultController::class,'delete']);

//search
Route::post('/result',[resultController::class,'searchRecord']) ->name('search-record');


//doctor
Route::get('/doctor',[resultController::class,'doctor']);

//appointment

Route::get('/appointment',[appointmentController::class,'appointment']);
Route::post('/appoint-page',[appointmentController::class,'appointPage']) ->name('appoint-page');

//payment
Route::get('/payment',[paymentController::class,'payment']);
Route::post('/payment-page',[paymentController::class,'paymentPage']) ->name('payment-page');
Route::post('/payment',[paymentController::class,'searchRecords']) ->name('search-records');
Route::get('/paymentShow',[paymentController::class,'paymentShow']);

//delete payment
Route::get('deleted/{id}',[paymentController::class,'deleted']);