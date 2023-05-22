<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

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

Route::get('/dashbroad', [HomeController::class, 'getUserById'])->name('dashbroad');
Route::get('/timetable', [HomeController::class, 'getTimeTable'])->name('timetable');
Route::post('/login', [HomeController::class, 'customLogin'])->name('login');
Route::post('/register', [HomeController::class, 'customRegistration'])->name('register');
Route::get('signout', [HomeController::class, 'signOut'])->name('signout');
Route::get('/', function(){return view('login');});
Route::get('/register', function(){return view('register');});
//Student
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/detail_users/{id}', [App\Http\Controllers\UserController::class, 'detail']);
Route::get('/delete_users/{id}', [App\Http\Controllers\UserController::class, 'delete']);


Route::get('/users_edit/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::get('/usersedit/{id}', [App\Http\Controllers\UserController::class, 'update']);

//Tim kiem users
Route::get('/users_search', function(){return view('users.users_search');});
Route::get('search',[App\Http\Controllers\UserController::class,'getSearch']);





