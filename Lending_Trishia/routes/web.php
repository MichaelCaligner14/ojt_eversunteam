<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoanRequestController;
use App\Http\Controllers\LoanRecordController;

use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



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

//Route::get('/login', function(){
//    if(Auth::attempt(['email' => 'hamoaytrishiaj@gmail.com','password' => 'helloworld21'])){
//        return 'authenticate';
 //   }
 //   return 'invalid auth';
//});


Route::get('/login', [CustomAuthController:: class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController:: class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController:: class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController:: class,'loginUser'])->name('login-user');
Route::get('/home',[CustomAuthController:: class,'home'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController:: class,'logout']);
Route::get('/user',[CustomAuthController:: class,'user']);

//BORROWERS
Route::get('details/{id}',[BorrowerController:: class,'details']);
Route::get('borrowers',[BorrowerController:: class,'borrowers']);
Route::post('add',[BorrowerController:: class,'add']);
Route::get('edit/{id}',[BorrowerController:: class,'edit']);
Route::post('update',[BorrowerController:: class,'update'])->name('update');
Route::get('delete/{id}',[BorrowerController:: class,'delete']);
Route::post('search-borrower',[BorrowerController::class,'searchBorrower']) ->name('search-borrower');

//LOAN REQUEST
//Route::get('loan',[LoanRequestController:: class,'loan']);
Route::get('loanform',[LoanRequestController:: class,'loanform']);
Route::post('addLoan',[LoanRequestController:: class,'addLoan']);
Route::get('editLoan/{id}',[LoanRequestController:: class,'editLoan']);
Route::post('updateLoan',[LoanRequestController:: class,'updateLoan'])->name('updateLoan');
Route::get('deleteLoan/{id}',[LoanRequestController:: class,'deleteLoan']);
Route::get('pendingrq',[JointableController:: class,'pendingrq']);
Route::get('pendingrq/delete/{id}',[JointableController::class,'deleteLoans'] )->name("deleteLoans");
Route::post('pendingrq',[LoanRequestController::class,'searchLoanRq']) ->name('pendingrq');

Route::get('approveLoan/{id}',[LoanRequestController:: class,'approveLoan']);
Route::post('addApprove',[LoanRequestController:: class,'addApprove'])->name('addApprove');


//LOAN REPORT
Route::get('loanreport',[LoanRecordController:: class,'loanreport']);
Route::post('addApprove',[LoanRecordController:: class,'addApprove']);
Route::get('editLoanReport/{id}',[LoanRecordController:: class,'editLoanReport']);
Route::post('updateLR',[LoanRecordController:: class,'updateLR'])->name('updateLR');
Route::get('deleteRecord/{id}',[LoanRecordController:: class,'deleteRecord']);
Route::post('loanreport',[LoanRecordController::class,'searchReport']) ->name('loanreport');


//PAYMENTS
Route::get('payments',[PaymentController:: class,'payments']);
Route::post('addPayment',[PaymentController:: class,'addPayment']);
Route::get('deletePay/{id}',[PaymentController:: class,'deletePay']);
Route::post('search-Payment',[PaymentController::class,'searchPay']) ->name('search-Payment');


///SAMPLE AREA
Route::get('search-by-name', [BorrowerController::class, 'searchbyname'])->name('searchbyname');
Route::get('sample',[CustomAuthController:: class,'sample']);
Route::get('sample1',[BorrowerController:: class,'sample1']);
Route::get('sample2',[BorrowerController:: class,'sample2']);
Route::post('formula',[CalculatorController:: class,'calc']);
Route::get('sidebar',[BorrowerController:: class,'sidebar']);

//CHAT ROOM
Route::get('/welcome',[CustomAuthController::class,'welcome']);
Route::post('/send-message', function(Request $request){
    event(new Message(
        $request->input('username'),
        $request->input('message')
    )
);
return ["success" => true];
});

