<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoanRequestController;



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
Route::get('details',[BorrowerController:: class,'details']);
Route::get('borrowers',[BorrowerController:: class,'borrowers']);
Route::post('add',[BorrowerController:: class,'add']);
Route::get('edit/{id}',[BorrowerController:: class,'edit']);
Route::post('update',[BorrowerController:: class,'update'])->name('update');
Route::get('delete/{id}',[BorrowerController:: class,'delete']);
Route::post('search-borrower',[BorrowerController::class,'searchBorrower']) ->name('search-borrower');

//LOAN REQUEST
Route::get('loan',[LoanRequestController:: class,'loan']);
Route::post('addLoan',[LoanRequestController:: class,'addLoan']);


//LOAN REPORT
Route::get('loanreport',[JointableController:: class,'loanreport']);
Route::get('editLoan/{id}',[LoanController:: class,'editLoan']);
Route::post('updateLoan',[LoanController:: class,'updateLoan'])->name('updateLoan');
Route::get('deleteLoan/{id}',[LoanController:: class,'deleteLoan']);


//PAYMENTS
Route::get('payments',[PaymentController:: class,'payments']);
Route::post('addPayment',[PaymentController:: class,'addPayment']);
Route::get('delete/{id}',[PaymentController:: class,'delete']);
