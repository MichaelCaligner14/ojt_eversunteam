<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LaravelCrudStudent;
use App\Http\Controllers\StudentsController;    
use App\Http\Controllers\StdntRegController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\ChatController;


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

//Route::post('/authenticate',[CustomAuthController::class,'authenticate'])->name('authenticate');

//Route::post('/authenticate',function(){
  //  if (Auth::attempt(['email' => 'james09@gmail.com', 'password' => 'james09'])){
   //     return 'authenticate';
  //  }
  //  return 'INVALID';

//});

//home
Route::get('/homepage',[CustomAuthController::class,'homepage']);

Route::get('/logout',[CustomAuthController::class,'logout']);

Route::get('subjects', [StudentsController::class,'subjects']);


//studentregistration
Route::get('stdntreg', [StdntRegController::class,'stdntreg']);

Route::post('addingstud', [StdntRegController::class,'addingstud']);

Route::post('addstudents', [StudentsController::class,'addstudents']);

Route::get('liststudents', [StdntRegController::class,'liststudents']);

Route::post('/search-record',[StdntRegController::class,'searchRecord']) ->name('search-record');


//subjects
Route::get('/subjects', [SubjectsController::class,'subjects']);

Route::post('addsubjects', [SubjectsController::class,'addsubjects']);

Route::get('dashboard', [SubjectsController::class,'dashboard']);

Route::get('dropsubj/{id}', [SubjectsController::class,'dropsubj']);


//liststudents
Route::get('delete/{id}',[StdntRegController::class,'delete']);

Route::get('edit/{id}',[StdntRegController::class,'edit']);

Route::post('update', [StdntRegController::class,'update'])->name('update');



//ChatRoom
Route::middleware('auth:sanctum')->get('/chat/rooms', [ChatController::class,'rooms']);

Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages', [ChatController::class,'messages']);

Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message', [ChatController::class,'newMessage']);