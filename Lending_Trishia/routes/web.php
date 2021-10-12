<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\LoanController;


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


Route::get('/index', function () {
    return view('index');
});


Route::get('/login', [CustomAuthController:: class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController:: class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController:: class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController:: class,'loginUser'])->name('login-user');
Route::get('/home',[CustomAuthController:: class,'home'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController:: class,'logout']);
Route::get('/user',[CustomAuthController:: class,'user']);

//BORROWERS
Route::get('borrowers',[BorrowerController:: class,'borrowers']);
Route::post('add',[BorrowerController:: class,'add']);
Route::get('edit/{id}',[BorrowerController:: class,'edit']);
Route::post('update',[BorrowerController:: class,'update'])->name('update');
Route::get('delete/{id}',[BorrowerController:: class,'delete']);

//LOAN
Route::get('loan',[LoanController:: class,'loan']);
Route::post('addLoan',[LoanController:: class,'addLoan']);

//LOANREPORT
Route::get('loanreport',[JointableController:: class,'loanreport']);

//PAYMENTS
Route::get('payments',[CustomAuthController:: class,'payments']);


///SAMPLE AREA
Route::get('search-by-name', [BorrowerController::class, 'searchbyname'])->name('searchbyname');
Route::get('sample',[CustomAuthController:: class,'sample']);
Route::get('sample1',[BorrowerController:: class,'sample1']);
Route::get('sample2',[BorrowerController:: class,'sample2']);
Route::post('formula',[CalculatorController:: class,'calc']);
Route::get('sidebar',[BorrowerController:: class,'sidebar']);




