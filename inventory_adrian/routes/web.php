<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin;

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
Route::get('/login', function () {
    return view ('login');
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
Route::get('edit/{id}', [OrderController::class,'edit']);
Route::post('update', [OrderController::class,'update'])->name('update');
Route::get('delete/{id}', [OrderController::class,'delete']);

/*employee*/
Route::get('employee',[EmployeeController::class, 'employee'])->middleware('isLoggedIn');
Route::post('addemp',[EmployeeController::class, 'addemp']);
Route::get('empedit/{id}', [EmployeeController::class,'empedit']);
Route::post('empupdate', [EmployeeController::class,'empupdate'])->name('empupdate');
Route::get('deletes/{id}', [EmployeeController::class,'deletes']);
Route::post('searchemp',[CategoryController::class,'searchRecord']) ->name('search-record');

/*Product*/
Route::get('product',[ProductController::class, 'product'])->middleware('isLoggedIn');
Route::post('addprod',[ProductController::class, 'addprod']);
Route::get('editprod/{id}', [ProductController::class,'editprod']);
Route::post('produpdate', [ProductController::class,'produpdate'])->name('produpdate');
Route::get('proddelete/{id}', [ProductController::class,'proddelete']);

/*Category*/
Route::get('category',[CategoryController::class,'category'])->middleware('isLoggedIn');
Route::post('addctg',[CategoryController::class, 'addctg']);
Route::get('editctg/{id}', [CategoryController::class,'editctg']);
Route::post('ctgupdate', [CategoryController::class,'ctgupdate'])->name('ctgupdate');
Route::get('ctgdelete/{id}', [CategoryController::class,'ctgdelete']);
Route::post('category',[CategoryController::class,'searchRecord']) ->name('category');

/*Inventory*/
Route::get('inventory', [InventoryController::class,'inventory'])->middleware('isLoggedIn');
Route::post('addinventory',[InventoryController::class, 'addinventory']);
Route::get('editinventory/{id}', [InventoryController::class,'editinventory']);
Route::post('inventoryupdate', [InventoryController::class,'inventoryupdate'])->name('inventoryupdate');
Route::get('inventorydelete/{id}', [InventoryController::class,'inventorydelete']);

/*Chat*/
Route::middleware(['auth:sanctum', 'verified'])->get('/chat', function(){
    return Inertia\Inertia::render('Chat/container');
})->name('chat');
Route::middleware('auth:sanctum')->get('/chat/rooms', [ChatController::class, 'rooms']);
Route::middleware('auth:sanctum')->get('/chat/room/{roomId}/messages', [ChatController::class, 'messages']);
Route::middleware('auth:sanctum')->post('/chat/room/{roomId}/message', [ChatController::class, 'newMessage']);