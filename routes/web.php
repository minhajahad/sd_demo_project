<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

// Route::get('/login', function(){
//     session()->put('user_id',5);
//     echo "You are now logged in";
// });

// Route::get('/logout', function(){
//     session()->forget('user_id',5);
//     echo "Logged out";
// });

Route::get('/no_access', function(){
    echo "You are not allowed to view this page";;
});



Route::get('/user',[UserController::class, 'getUser']);
Route::get('/register',[RegisterController::class, 'getUser']);
Route::post('/register',[RegisterController::class, 'registerUser']);
Route::get('/customer',[CustomerController::class, 'index'])->middleware('ageUserStudent');
Route::post('/customer',[CustomerController::class, 'storeData'])->middleware('ageUserStudent');
Route::get('/customer/viewcustomer',[CustomerController::class, 'getcustomerview'])->name('customer.view')->middleware('ageUserStudent');
Route::get('/customer/delete/{id}',[CustomerController::class, 'deleteCustomer']);
Route::get('/customer/edit/{id}',[CustomerController::class, 'editCustomer']);
Route::post('/customer/update/{id}',[CustomerController::class, 'update']);


Route::middleware(['ageUserStudent'])->group(function(){
    Route::get('/student',[StudentController::class,'index']);
    Route::get('/addstudent',[StudentController::class,'create']);
    Route::post('/addstudent',[StudentController::class,'store']);
    Route::get('/student/delete/{id}',[StudentController::class, 'deleteStudent']);
    Route::get('/student/edit/{id}',[StudentController::class, 'editStudent']);
    Route::post('/student/update/{id}',[StudentController::class, 'update']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/admin',[App\Http\Controllers\AdminController::class, 'index']);
